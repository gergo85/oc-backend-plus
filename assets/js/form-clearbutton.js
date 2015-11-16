/* Add Clear v2.0.5 */
!function(n,t,e,i){function o(t,e){this.element=t,this.options=n.extend({},l,e),this._defaults=l,this._name=s,this.init()}var s="addClear",l={closeSymbol:"&#10006;",color:"#CCC",top:1,right:4,returnFocus:!0,showOnLoad:!1,onClear:null,hideOnBlur:!1,tabbable:!0};o.prototype={init:function(){var t,i=n(this.element),o=this,s=this.options;i.wrap("<span class='clearbutton'></span>");var l=s.tabbable?"":" tabindex='-1'";t=n("<a href='#clear' style='display:none;'"+l+">"+s.closeSymbol+"</a>"),i.after(t),i.next().css({color:s.color,"text-decoration":"none",display:"none","line-height":1,overflow:"hidden",position:"absolute",right:s.right,top:s.top},this),i.val().length>=1&&s.showOnLoad===!0&&t.css({display:"block"}),i.focus(function(){n(this).val().length>=1&&t.css({display:"block"})}),i.blur(function(n){s.hideOnBlur&&setTimeout(function(){var i=n.relatedTarget||n.explicitOriginalTarget||e.activeElement;i!==t[0]&&t.css({display:"none"})},0)}),i.keyup(function(){t.css(n(this).val().length>=1?{display:"block"}:{display:"none"})}),s.hideOnBlur&&t.blur(function(){t.css({display:"none"})}),t.click(function(t){var e=n(o.element);e.val(""),n(this).css({display:"none"}),s.returnFocus===!0&&e.focus(),s.onClear&&s.onClear(e),t.preventDefault()})}},n.fn[s]=function(t){return this.each(function(){n.data(this,"plugin_"+s)||n.data(this,"plugin_"+s,new o(this,t))})}}(jQuery,window,document)
$(document).ready(function() {
  $('input[type="text"], input[type="password"], input[type="number"], input[type="email"], textarea').addClear({
    top: 37,
    right: 11
  });
});
