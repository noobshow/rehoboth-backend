window.Echo.private("optimus-pro").listenToAll((h,m)=>{if(console.log(h),h.includes("OptimusSignalUpdated")&&document.getElementById("optimus_pro_signals")){const{signals:s}=m;s.forEach(u=>{const{asset:i,asset_clr:o,range:p,fundamental:c,technical:_,sentiment:d,strategy:l}=u,t=i.toLowerCase();document.getElementById(`optimus_pro_signal_${t}_progress`).style.backgroundColor=o;const e=document.getElementById(`optimus_pro_signal_${t}_range`);e.innerText=p;const n=document.getElementById(`optimus_pro_signal_${t}_fundamental`);n.innerText=c;const a=document.getElementById(`optimus_pro_signal_${t}_technical`);a.innerText=_;const r=document.getElementById(`optimus_pro_signal_${t}_sentiment`);r.innerText=d;const y=document.getElementById(`optimus_pro_signal_${t}_strategy`);y.innerText=l,p?e.classList.remove("d-none"):e.classList.add("d-none"),c?(n.classList.remove("d-none"),c=="Buy"?(n.classList.add("btn-primary"),n.classList.remove("btn-danger")):(n.classList.add("btn-danger"),n.classList.remove("btn-primary"))):n.classList.add("d-none"),_?(a.classList.remove("d-none"),_=="Buy"?(a.classList.add("btn-primary"),a.classList.remove("btn-danger")):(a.classList.add("btn-danger"),a.classList.remove("btn-primary"))):a.classList.add("d-none"),d?(r.classList.remove("d-none"),d=="Buy"?(r.classList.add("btn-primary"),r.classList.remove("btn-danger")):(r.classList.add("btn-danger"),r.classList.remove("btn-primary"))):r.classList.add("d-none"),l?(y.classList.remove("d-none"),l.includes("+")?(y.classList.add("btn-primary"),y.classList.remove("btn-info")):(y.classList.add("btn-info"),y.classList.remove("btn-primary"))):y.classList.add("d-none")})}else if(h.includes("TradeBlotterUpdated")&&document.getElementById("optimus_pro_trade_blotters")){const s=document.getElementById("optimus_pro_trade_blotters"),u=document.getElementById("optimus_pro_trade_blotters_placeholder");for(;s.childElementCount>1;)s.removeChild(s.lastChild);const{signals:i}=m;i.forEach(o=>{const{asset:p,time:c,size:_,price:d,sl:l,tp:t,pl:e,size_clr:n,pl_clr:a}=o,r=u.cloneNode(!0);r.classList.remove("d-none"),r.querySelector("#placeholder_trade_blotters_asset").innerText=p,r.querySelector("#placeholder_trade_blotters_time").innerText=c,r.querySelector("#placeholder_trade_blotters_size").innerText=_,r.querySelector("#placeholder_trade_blotters_size").style.color=n,r.querySelector("#placeholder_trade_blotters_price").innerText=d,r.querySelector("#placeholder_trade_blotters_sl").innerText=l,r.querySelector("#placeholder_trade_blotters_tp").innerText=t,r.querySelector("#placeholder_trade_blotters_pl").innerText=e,r.querySelector("#placeholder_trade_blotters_pl").style.color=a,r.removeAttribute("id"),r.querySelectorAll("*").forEach(f=>{f.removeAttribute("id")}),s.appendChild(r)})}else if(h.includes("NewsDataUpdated")&&document.getElementById("optimus_pro_news_data")){const s=document.getElementById("optimus_pro_news_data"),u=document.getElementById("optimus_pro_news_data_placeholder");for(;s.childElementCount>1;)s.removeChild(s.lastChild);const{signals:i}=m;i.forEach(o=>{const{time:p,impact:c,event:_,actual:d,forecast:l,previous:t}=o,e=u.cloneNode(!0);e.classList.remove("d-none"),e.querySelector("#placeholder_news_data_time").innerText=p,e.querySelector("#placeholder_news_data_event").innerText=_,e.querySelector("#placeholder_news_data_actual").innerText=d||"-",e.querySelector("#placeholder_news_data_forecast").innerText=l,e.querySelector("#placeholder_news_data_previous").innerText=t;const n=e.querySelector("#placeholder_news_data_impact");c==3?n.classList.add("text-danger"):c==2?n.classList.add("text-warning"):c==1?n.classList.add("text-success"):n.classList.add("text-muted"),e.removeAttribute("id"),e.querySelectorAll("*").forEach(r=>{r.removeAttribute("id")}),s.appendChild(e)}),$('[data-toggle="tooltip"]').tooltip()}else if(h.includes("CDLSignalUpdated")&&document.getElementById("optimus_pro_candle")){const s=document.getElementById("optimus_pro_candle"),u=document.getElementById("optimus_pro_candle_placeholder");for(;s.childElementCount>1;)s.removeChild(s.lastChild);const{signals:i}=m;i.forEach(_=>{const{cdl:d,cdl_clr:l}=_;if(!d)return;const t=u.cloneNode(!0);t.classList.remove("d-none"),t.querySelector("#optimus_pro_candle_asset").innerText=d,t.querySelector("#optimus_pro_candle_td").style.color=l;const e=t.querySelector("#optimus_pro_candle_signal_text");l=="crimson"?(e.querySelector(".is-bearish").classList.remove("d-none"),e.querySelector(".is-bullish").remove()):l=="forestgreen"&&(e.querySelector(".is-bullish").classList.remove("d-none"),e.querySelector(".is-bearish").remove()),t.removeAttribute("id"),t.querySelectorAll("*").forEach(a=>{a.removeAttribute("id")}),s.appendChild(t)});const o=document.getElementById("optimus_pro_investors"),p=document.getElementById("optimus_pro_investors_placeholder");for(;o.childElementCount>1;)o.removeChild(o.lastChild);const{signals:c}=m;c.forEach(_=>{const{bias:d,bias_clr:l}=_;if(!l)return;const t=p.cloneNode(!0);t.classList.remove("d-none"),t.querySelector("#optimus_pro_investors_asset").innerText=d,t.querySelector("#optimus_pro_investors_td").style.color=l;const e=t.querySelector("#optimus_pro_investors_signal_text");l=="lightsalmon"?(e.querySelector(".is-bearish").classList.remove("d-none"),e.querySelector(".is-bullish").remove(),e.querySelector(".is-neutral").remove()):l=="chartreuse"&&(e.querySelector(".is-bullish").classList.remove("d-none"),e.querySelector(".is-bearish").remove(),e.querySelector(".is-neutral").remove()),t.removeAttribute("id"),t.querySelectorAll("*").forEach(a=>{a.removeAttribute("id")}),o.appendChild(t)})}else if(h.includes("OptimusAlertUpdated")){const{alert:s}=m;toastr.info(s,"Signal Target"),playNotificationSound()}else if(h.includes("OnMessage")){let s=function(u){var i=u.getHours(),o=u.getMinutes(),p=i>=12?"pm":"am";i=i%12,i=i||12,o=o<10?"0"+o:o;var c=i+":"+o+" "+p;return c};var q=s;console.log("MessageSent event received:",m);var b=document.querySelector("#kt_drawer_chat_messenger"),v=b.querySelector('[data-kt-element="messages"]'),g,w=v.querySelector('[data-kt-element="template-in"]');g=w.cloneNode(!0),g.classList.remove("d-none");var S=new Date(m.message.created_at);timeStr=s(S),g.querySelector('[data-kt-element="message-time"]').innerText=timeStr,g.querySelector('[data-kt-element="message-user"]').innerText=m.message.user.name,g.querySelector('[data-kt-element="message-text"]').innerText=m.message.body,g.removeAttribute("data-kt-element"),v.appendChild(g),v.scrollTop=v.scrollHeight}});
