'use strict';
const projects=JSON.parse(document.getElementById('projects').textContent);
const dialog=document.querySelector('dialog');
const media=document.getElementById('detail-media');
const reduced=matchMedia('(prefers-reduced-motion: reduce)');
const toggle=document.getElementById('motion');
const videos=[...document.querySelectorAll('.art video')];
let paused=reduced.matches,current=0;
function updateMotion(){toggle.textContent=paused?'Play motion ▷':'Pause motion Ⅱ';toggle.setAttribute('aria-pressed',String(paused));videos.forEach(v=>{if(paused||dialog.open||document.hidden||v.dataset.visible!=='true'){v.pause();return;}if(!v.src)v.src=v.dataset.src;v.play().catch(()=>{});});}
toggle.hidden=false;toggle.addEventListener('click',()=>{paused=!paused;updateMotion();});
reduced.addEventListener('change',e=>{paused=e.matches;updateMotion();});
const observer=new IntersectionObserver(entries=>{entries.forEach(e=>{e.target.dataset.visible=String(e.isIntersecting);});updateMotion();},{threshold:.15});
videos.forEach(v=>observer.observe(v));document.addEventListener('visibilitychange',updateMotion);updateMotion();
function showProject(index){current=(index+projects.length)%projects.length;const p=projects[current];media.querySelector('video')?.pause();media.replaceChildren();const asset=document.createElement(p.video?'video':'img');asset.src=p.video||p.src;if(p.video){asset.controls=true;asset.playsInline=true;asset.loop=true;asset.setAttribute('aria-label',p.title);}else{asset.alt=p.client+' — '+p.title;}media.append(asset);document.getElementById('detail-title').textContent=p.title;document.getElementById('detail-client').textContent=p.client;document.getElementById('detail-kind').textContent=p.kind;document.getElementById('detail-count').textContent=String(current+1).padStart(2,'0')+' / 30';const link=document.getElementById('case-link');link.hidden=!p.link;if(p.link)link.href=p.link;if(!dialog.open)dialog.showModal();updateMotion();}
document.querySelectorAll('[data-index]').forEach(a=>a.addEventListener('click',e=>{e.preventDefault();showProject(Number(a.dataset.index));}));
document.getElementById('close').addEventListener('click',()=>dialog.close());
dialog.addEventListener('close',()=>{media.querySelector('video')?.pause();media.replaceChildren();updateMotion();});
dialog.addEventListener('click',e=>{if(e.target===dialog){const r=dialog.getBoundingClientRect();if(e.clientX<r.left||e.clientX>r.right||e.clientY<r.top||e.clientY>r.bottom)dialog.close();}});
document.getElementById('prev').addEventListener('click',()=>showProject(current-1));document.getElementById('next').addEventListener('click',()=>showProject(current+1));
dialog.addEventListener('keydown',e=>{if(e.target.tagName==='VIDEO')return;if(e.key==='ArrowLeft'){e.preventDefault();showProject(current-1);}if(e.key==='ArrowRight'){e.preventDefault();showProject(current+1);}});
document.getElementById('back-top').addEventListener('click',e=>{e.preventDefault();window.scrollTo({top:0,behavior:reduced.matches?'instant':'smooth'});document.querySelector('.brand').focus({preventScroll:true});});
