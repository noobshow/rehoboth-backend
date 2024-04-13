window.Echo.private("optimus-pro.signals").listenToAll((_,y)=>{if(console.log(_),_.includes("OptimusSignalUpdated")&&document.getElementById("optimus_pro_signals")){const{signals:r}=y;r.forEach(p=>{const{asset:h,asset_clr:d,range:m,fundamental:a,technical:c,sentiment:i,strategy:o}=p,t=h.toLowerCase();document.getElementById(`optimus_pro_signal_${t}_progress`).style.backgroundColor=d;const e=document.getElementById(`optimus_pro_signal_${t}_range`);e.innerText=m;const l=document.getElementById(`optimus_pro_signal_${t}_fundamental`);l.innerText=a;const n=document.getElementById(`optimus_pro_signal_${t}_technical`);n.innerText=c;const s=document.getElementById(`optimus_pro_signal_${t}_sentiment`);s.innerText=i;const u=document.getElementById(`optimus_pro_signal_${t}_strategy`);u.innerText=o,m?e.classList.remove("d-none"):e.classList.add("d-none"),a?(l.classList.remove("d-none"),a=="Buy"?(l.classList.add("btn-primary"),l.classList.remove("btn-danger")):(l.classList.add("btn-danger"),l.classList.remove("btn-primary"))):l.classList.add("d-none"),c?(n.classList.remove("d-none"),c=="Buy"?(n.classList.add("btn-primary"),n.classList.remove("btn-danger")):(n.classList.add("btn-danger"),n.classList.remove("btn-primary"))):n.classList.add("d-none"),i?(s.classList.remove("d-none"),i=="Buy"?(s.classList.add("btn-primary"),s.classList.remove("btn-danger")):(s.classList.add("btn-danger"),s.classList.remove("btn-primary"))):s.classList.add("d-none"),o?(u.classList.remove("d-none"),o.includes("+")?(u.classList.add("btn-primary"),u.classList.remove("btn-info")):(u.classList.add("btn-info"),u.classList.remove("btn-primary"))):u.classList.add("d-none")})}else if(_.includes("TradeBlotterUpdated")&&document.getElementById("optimus_pro_trade_blotters")){const r=document.getElementById("optimus_pro_trade_blotters"),p=document.getElementById("optimus_pro_trade_blotters_placeholder");for(;r.childElementCount>1;)r.removeChild(r.lastChild);const{signals:h}=y;h.forEach(d=>{const{asset:m,time:a,size:c,price:i,sl:o,tp:t,pl:e,size_clr:l,pl_clr:n}=d,s=p.cloneNode(!0);s.classList.remove("d-none"),s.querySelector("#placeholder_trade_blotters_asset").innerText=m,s.querySelector("#placeholder_trade_blotters_time").innerText=a,s.querySelector("#placeholder_trade_blotters_size").innerText=c,s.querySelector("#placeholder_trade_blotters_size").style.color=l,s.querySelector("#placeholder_trade_blotters_price").innerText=i,s.querySelector("#placeholder_trade_blotters_sl").innerText=o,s.querySelector("#placeholder_trade_blotters_tp").innerText=t,s.querySelector("#placeholder_trade_blotters_pl").innerText=e,s.querySelector("#placeholder_trade_blotters_pl").style.color=n,s.removeAttribute("id"),s.querySelectorAll("*").forEach(g=>{g.removeAttribute("id")}),r.appendChild(s)})}else if(_.includes("NewsDataUpdated")&&document.getElementById("optimus_pro_news_data")){const r=document.getElementById("optimus_pro_news_data"),p=document.getElementById("optimus_pro_news_data_placeholder");for(;r.childElementCount>1;)r.removeChild(r.lastChild);const{signals:h}=y;h.forEach(d=>{const{time:m,impact:a,event:c,actual:i,forecast:o,previous:t}=d,e=p.cloneNode(!0);e.classList.remove("d-none"),e.querySelector("#placeholder_news_data_time").innerText=m,e.querySelector("#placeholder_news_data_event").innerText=c,e.querySelector("#placeholder_news_data_actual").innerText=i||"-",e.querySelector("#placeholder_news_data_forecast").innerText=o,e.querySelector("#placeholder_news_data_previous").innerText=t;const l=e.querySelector("#placeholder_news_data_impact");a==3?l.classList.add("text-danger"):a==2?l.classList.add("text-warning"):a==1?l.classList.add("text-success"):l.classList.add("text-muted"),e.removeAttribute("id"),e.querySelectorAll("*").forEach(s=>{s.removeAttribute("id")}),r.appendChild(e)}),$('[data-toggle="tooltip"]').tooltip()}else if(_.includes("CDLSignalUpdated")&&document.getElementById("optimus_pro_candle")){const r=document.getElementById("optimus_pro_candle"),p=document.getElementById("optimus_pro_candle_placeholder");for(;r.childElementCount>1;)r.removeChild(r.lastChild);const{signals:h}=y;h.forEach(c=>{const{cdl:i,cdl_clr:o}=c;if(!i)return;const t=p.cloneNode(!0);t.classList.remove("d-none"),t.querySelector("#optimus_pro_candle_asset").innerText=i,t.querySelector("#optimus_pro_candle_td").style.color=o;const e=t.querySelector("#optimus_pro_candle_signal_text");o=="crimson"?(e.querySelector(".is-bearish").classList.remove("d-none"),e.querySelector(".is-bullish").remove()):o=="forestgreen"&&(e.querySelector(".is-bullish").classList.remove("d-none"),e.querySelector(".is-bearish").remove()),t.removeAttribute("id"),t.querySelectorAll("*").forEach(n=>{n.removeAttribute("id")}),r.appendChild(t)});const d=document.getElementById("optimus_pro_investors"),m=document.getElementById("optimus_pro_investors_placeholder");for(;d.childElementCount>1;)d.removeChild(d.lastChild);const{signals:a}=y;a.forEach(c=>{const{bias:i,bias_clr:o}=c;if(!o)return;const t=m.cloneNode(!0);t.classList.remove("d-none"),t.querySelector("#optimus_pro_investors_asset").innerText=i,t.querySelector("#optimus_pro_investors_td").style.color=o;const e=t.querySelector("#optimus_pro_investors_signal_text");o=="lightsalmon"?(e.querySelector(".is-bearish").classList.remove("d-none"),e.querySelector(".is-bullish").remove(),e.querySelector(".is-neutral").remove()):o=="chartreuse"&&(e.querySelector(".is-bullish").classList.remove("d-none"),e.querySelector(".is-bearish").remove(),e.querySelector(".is-neutral").remove()),t.removeAttribute("id"),t.querySelectorAll("*").forEach(n=>{n.removeAttribute("id")}),d.appendChild(t)})}else if(_.includes("OptimusAlertUpdated")){const{alert:r}=y;toastr.info(r,"Signal Target"),playNotificationSound()}});window.Echo.private("chat").listen("OnMessage",_=>{console.log("MessageSent event received:",_)});