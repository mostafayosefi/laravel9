var smarterTrackChat_Defined=1,smarterTrackChat_UpdateCount=[];function smarterTrackChat_CheckRefreshTime(e,t,r){var a,n,o,i=window.document.getElementById("stimgdetect"+t);i&&i.src&&(a=i.offsetHeight,n=window.document.getElementById(t+"_online"),o=window.document.getElementById(t+"_offline"),0<a&&(n&&(n.style.display=1===a?"":"none"),o&&(o.style.display=2===a?"":"none"))),0<r&&(smarterTrackChat_UpdateCount[t]=(smarterTrackChat_UpdateCount[t]||0)+1,smarterTrackChat_UpdateCount[t]>=5*r&&(i&&(i.src=e+"&time="+(new Date).getTime()),smarterTrackChat_UpdateCount[t]=0)),setTimeout("smarterTrackChat_CheckRefreshTime('"+e+"','"+t+"',"+r+");",200)}function smarterTrackChat_EmbedDetectorImage(e,t){var r=document.createElement("img");r.id="stimgdetect"+e,r.src=t+"&time="+(new Date).getTime(),r.style.position="absolute",r.style.top="0px",r.style.left="0px",r.style.visibility="hidden",document.body.insertBefore(r,document.body.firstChild)}function smarterTrackChat_CreateSection(a,n,e){var t,r;return n.ImageUrl?(t=document.createElement("img")).src=n.ImageUrl:(t=document.createElement("span")).innerHTML=n.Text,(r=document.createElement("a")).id=a+(e?"_online":"_offline"),r.className=n.CssClass||"",r.href=n.Url,r.style.display="none",r.target=n.Target||"_blank",r.title=n.Title,r.appendChild(t),e&&(r.target="",r.href="#",r.onclick=function(e){var t=e||window.event,r=window.open(n.Url,"LiveChat"+a,"toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=360,height=420");return r&&(r.focus(),r.opener=window),t.preventDefault&&t.preventDefault(),t.stopPropagation&&t.stopPropagation(),t.cancelBubble&&(t.cancelBubble=!0),!1}),r}function smarterTrackChatInit(e){var t,r=document.getElementById(e.ControlID);r&&(smarterTrackChat_EmbedDetectorImage(e.ControlID,e.RefreshUrl),r.appendChild(smarterTrackChat_CreateSection(e.ControlID,e.Online,!0)),null!=e.Offline&&r.appendChild(smarterTrackChat_CreateSection(e.ControlID,e.Offline,!1)),smarterTrackChat_CheckRefreshTime(e.RefreshUrl,e.ControlID,e.RefreshTimeSeconds),(t=document.createElement("style")).textContent=".ChatButtonSVG{width:70px;} .ChatButtonSVG img{width:70px;}",document.getElementById(e.ControlID).appendChild(t))}
//# sourceMappingURL=ChatLink.js.map

smarterTrackChatInit({
  "ControlID": "stlivechat02",
  "RefreshUrl": "//support.iranhost.com:443/ChatLink.ashx?config=9&refresh=1",
  "RefreshTimeSeconds": 30,
  "Online": {
    "Url": "//support.iranhost.com:443/Main/Chat/frmClientChat.aspx?config=9",
    "Target": "",
    "Title": "Chat with us!",
    "ImageUrl": "https://iranhost.com/assets/images/IH-support-vector.svg",
    "CssClass": null,
    "Text": "Live Chat is ONLINE"
  }
});
