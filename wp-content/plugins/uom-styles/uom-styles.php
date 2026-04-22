<?php
/**
 * Plugin Name: UOM Home Page Styles
 * Description: Injects styles for University of Malabe home page
 * Version: 1.0
 */

function uom_inject_styles() {
    if ( is_front_page() || is_page('home') ) { ?>
<style>
@import url("https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500;600&display=swap");
.uom-wrap{font-family:"DM Sans",sans-serif}
.uom-wrap *,.uom-wrap *::before,.uom-wrap *::after{box-sizing:border-box}
.uom-hero{position:relative;min-height:92vh;display:flex;align-items:center;justify-content:center;text-align:center;padding:100px 40px 80px;overflow:hidden;background:#0f4d2a}
.uom-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 70% 60% at 20% 30%,rgba(45,158,95,.45) 0%,transparent 70%),radial-gradient(ellipse 50% 50% at 80% 70%,rgba(200,168,75,.18) 0%,transparent 60%),radial-gradient(ellipse 80% 80% at 50% 50%,#0f4d2a 0%,transparent 100%);animation:uomMesh 8s ease-in-out infinite alternate}
@keyframes uomMesh{0%{opacity:.85;transform:scale(1)}100%{opacity:1;transform:scale(1.04)}}
.uom-circle{position:absolute;border-radius:50%;border:1px solid rgba(255,255,255,.08);animation:uomFloat 12s ease-in-out infinite}
.uom-circle:nth-child(1){width:320px;height:320px;top:-60px;right:-80px;animation-delay:0s}
.uom-circle:nth-child(2){width:180px;height:180px;bottom:60px;left:-40px;animation-delay:-4s}
.uom-circle:nth-child(3){width:80px;height:80px;bottom:30%;right:12%;animation-delay:-8s;border-color:rgba(200,168,75,.25)}
@keyframes uomFloat{0%,100%{transform:translateY(0) rotate(0deg)}50%{transform:translateY(-24px) rotate(8deg)}}
.uom-hero-content{position:relative;z-index:2;max-width:780px}
.uom-badge{display:inline-block;background:rgba(200,168,75,.2);border:1px solid rgba(200,168,75,.5);color:#c8a84b;font-size:11px;font-weight:600;letter-spacing:3px;text-transform:uppercase;padding:6px 18px;border-radius:30px;margin-bottom:28px;opacity:0;animation:uomUp .7s .2s forwards}
.uom-hero h1{font-family:"Playfair Display",serif;font-size:clamp(44px,7vw,82px);font-weight:900;color:#fff !important;line-height:1.07;margin-bottom:22px;opacity:0;animation:uomUp .8s .4s forwards}
.uom-hero h1 span{color:#c8a84b;font-style:italic}
.uom-sub{font-size:17px;color:rgba(255,255,255,.72);line-height:1.7;margin-bottom:44px;font-weight:300;opacity:0;animation:uomUp .8s .6s forwards}
.uom-btns{display:flex;gap:16px;justify-content:center;flex-wrap:wrap;opacity:0;animation:uomUp .8s .8s forwards}
.uom-btn-gold{background:#c8a84b;color:#0f4d2a !important;padding:15px 38px;border-radius:50px;font-weight:700;font-size:14px;text-decoration:none !important;box-shadow:0 6px 28px rgba(200,168,75,.35);display:inline-block;transition:transform .25s,box-shadow .25s}
.uom-btn-gold:hover{transform:translateY(-3px);box-shadow:0 12px 36px rgba(200,168,75,.5);background:#dbb95a}
.uom-btn-white{border:2px solid rgba(255,255,255,.5);color:#fff !important;padding:15px 38px;border-radius:50px;font-weight:600;font-size:14px;text-decoration:none !important;background:rgba(255,255,255,.07);display:inline-block;transition:transform .25s,border-color .25s,background .25s}
.uom-btn-white:hover{transform:translateY(-3px);border-color:rgba(255,255,255,.9);background:rgba(255,255,255,.14)}
.uom-scroll{position:absolute;bottom:32px;left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:8px;color:rgba(255,255,255,.4);font-size:11px;letter-spacing:2px;text-transform:uppercase;animation:uomUp 1s 1.2s both}
.uom-scroll span{display:block;width:1px;height:40px;background:linear-gradient(to bottom,rgba(255,255,255,.4),transparent);animation:uomLine 1.8s ease-in-out infinite}
@keyframes uomLine{0%,100%{opacity:.4;transform:scaleY(1)}50%{opacity:1;transform:scaleY(.6)}}
.uom-stats{display:grid;grid-template-columns:repeat(4,1fr);background:#fff;box-shadow:0 8px 40px rgba(0,0,0,.08)}
.uom-stat{padding:36px 20px;text-align:center;border-right:1px solid #edf4f0;position:relative;overflow:hidden;transition:background .3s}
.uom-stat:last-child{border-right:none}
.uom-stat::after{content:"";position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(90deg,#1a6b3a,#2d9e5f);transform:scaleX(0);transition:transform .4s}
.uom-stat:hover{background:#e8f5ee}
.uom-stat:hover::after{transform:scaleX(1)}
.uom-stat-num{font-family:"Playfair Display",serif;font-size:40px;font-weight:900;color:#1a6b3a;line-height:1;display:block}
.uom-stat-label{font-size:12px;font-weight:500;color:#6b7c72;text-transform:uppercase;letter-spacing:1.5px;margin-top:6px;display:block}
.uom-about{max-width:860px;margin:90px auto;padding:0 30px;text-align:center}
.uom-tag{display:block;font-size:11px;font-weight:600;letter-spacing:3px;text-transform:uppercase;color:#2d9e5f;margin-bottom:14px}
.uom-title{font-family:"Playfair Display",serif;font-size:clamp(28px,4vw,42px);font-weight:700;color:#0f4d2a;margin-bottom:20px;line-height:1.2}
.uom-title em{font-style:italic;color:#2d9e5f}
.uom-about p{font-size:16px;color:#6b7c72;line-height:1.85;font-weight:300}
.uom-faculties{background:linear-gradient(160deg,#f4faf6 0%,#e8f5ee 100%);padding:90px 30px}
.uom-fac-header{text-align:center;margin-bottom:56px}
.uom-fac-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:20px;max-width:1060px;margin:0 auto}
.uom-fac-card{background:#fff;border-radius:18px;padding:36px 20px 28px;text-align:center;box-shadow:0 4px 20px rgba(0,0,0,.05);border:1px solid #e0ede6;position:relative;overflow:hidden;transition:transform .3s,box-shadow .3s}
.uom-fac-card::before{content:"";position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,#1a6b3a,#2d9e5f);transform:scaleX(0);transform-origin:left;transition:transform .35s}
.uom-fac-card:hover{transform:translateY(-8px);box-shadow:0 16px 40px rgba(15,77,42,.12)}
.uom-fac-card:hover::before{transform:scaleX(1)}
.uom-fac-icon{font-size:42px;margin-bottom:16px;display:block;transition:transform .3s}
.uom-fac-card:hover .uom-fac-icon{transform:scale(1.15) rotate(-4deg)}
.uom-fac-name{font-weight:700;font-size:13px;color:#0f4d2a;line-height:1.4}
.uom-why{max-width:1060px;margin:90px auto;padding:0 30px}
.uom-why-header{text-align:center;margin-bottom:56px}
.uom-why-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:24px}
.uom-why-card{background:#fff;border:1px solid #e0ede6;border-radius:18px;padding:32px 26px;position:relative;overflow:hidden;transition:transform .3s,box-shadow .3s}
.uom-why-card:hover{transform:translateY(-6px);box-shadow:0 14px 38px rgba(15,77,42,.1)}
.uom-why-accent{position:absolute;top:0;right:0;width:80px;height:80px;background:radial-gradient(circle at top right,rgba(45,158,95,.12),transparent 70%);border-radius:0 18px 0 100%}
.uom-why-icon{font-size:30px;margin-bottom:14px;display:block}
.uom-why-title{font-weight:700;font-size:15px;color:#0f4d2a;margin-bottom:8px}
.uom-why-desc{font-size:13px;color:#6b7c72;line-height:1.75;font-weight:300}
.uom-cta{position:relative;background:#0f4d2a;padding:100px 40px;text-align:center;overflow:hidden;margin-top:40px}
.uom-cta::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 80% at 15% 50%,rgba(45,158,95,.3) 0%,transparent 60%),radial-gradient(ellipse 40% 60% at 85% 50%,rgba(200,168,75,.15) 0%,transparent 60%)}
.uom-cta-inner{position:relative;z-index:2;max-width:680px;margin:0 auto}
.uom-cta h2{font-family:"Playfair Display",serif;font-size:clamp(28px,4vw,48px);font-weight:900;color:#fff !important;line-height:1.15;margin-bottom:16px}
.uom-cta h2 em{color:#c8a84b;font-style:italic}
.uom-cta p{font-size:16px;color:rgba(255,255,255,.65);margin-bottom:40px;font-weight:300}
@keyframes uomUp{from{opacity:0;transform:translateY(28px)}to{opacity:1;transform:translateY(0)}}
.uom-reveal{opacity:0;transform:translateY(30px);transition:opacity .7s,transform .7s}
.uom-reveal.uom-visible{opacity:1;transform:none}
.uom-stagger > *{opacity:0;transform:translateY(24px);transition:opacity .6s,transform .6s}
.uom-stagger.uom-visible > *:nth-child(1){opacity:1;transform:none;transition-delay:.05s}
.uom-stagger.uom-visible > *:nth-child(2){opacity:1;transform:none;transition-delay:.15s}
.uom-stagger.uom-visible > *:nth-child(3){opacity:1;transform:none;transition-delay:.25s}
.uom-stagger.uom-visible > *:nth-child(4){opacity:1;transform:none;transition-delay:.35s}
.uom-stagger.uom-visible > *:nth-child(5){opacity:1;transform:none;transition-delay:.45s}
.uom-stagger.uom-visible > *:nth-child(6){opacity:1;transform:none;transition-delay:.55s}
@media(max-width:700px){.uom-stats{grid-template-columns:repeat(2,1fr)}.uom-stat:nth-child(2){border-right:none}.uom-stat:nth-child(1),.uom-stat:nth-child(2){border-bottom:1px solid #edf4f0}}
</style>
<?php }
}
add_action('wp_head', 'uom_inject_styles');