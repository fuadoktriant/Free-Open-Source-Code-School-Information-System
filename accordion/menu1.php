<link rel="stylesheet" href="style2.css" type="text/css" />
<script type="text/javascript" src="mootools-core.js"></script>
<script type="text/javascript" src="mootools-more.js"></script>
<script type="text/javascript">
window.addEvent('domready',function(){
        var accordion = new Accordion($$('h3.toggler'),$$('.element'),{
        onActive: function(toggler) {toggler.setStyle(
            'background','url(accor_onAct.png) no-repeat right');
        },
        onBackground: function(toggler) {toggler.setStyle(
            'background','url(accor_onBack.png) no-repeat right');}
        });
    });
</script>
<div class="accordion" id="acc">
  <h3 class="toggler" align="center">Menu 1</h3>
  <div class="element">
    <ul>
      <li>Dummy Menu 1</li>
      <li>Dummy Menu 2</li>
      <li>Dummy Menu 3</li>
    </ul>
  </div>
</div>

<div class="accordion" id="acc">
  <h3 class="toggler" align="center">Menu 2</h3>
  <div class="element" >
    <ul>
      <li>Dummy Menu 1</li>
      <li>Dummy Menu 2</li>
      <li>Dummy Menu 3</li>
    </ul>
  </div>
</div>

<div class="accordion" id="acc">
  <h3 class="toggler" align="center">Menu 3</h3>
  <div class="element"style="cursor:pointer;">
    <ul>
      <li>Dummy Menu 1</li>
      <li>Dummy Menu 2</li>
      <li>Dummy Menu 3</li>
    </ul>
  </div>
</div>
