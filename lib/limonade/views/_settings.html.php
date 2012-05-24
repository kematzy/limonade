<div id="settings" class="wrap">
  
  <h2>LimonadePHP <span>v<?= LIMONADE; ?></span> - APPLICATION SETTINGS</h2>
  
  <hr>
  
  <div id="request">
    <h3>REQUEST <span>($_REQUEST)</span></h3>
    <? if( ! empty($_REQUEST) ): ?>
    <a class="toggle">HIDE</a>
    <table id="request-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
      <? foreach($_REQUEST as $key => $val): ?>
        <tr>
          <td><?= h($key); ?></td>
          <td class="code"><div><?= debug($val); ?></div></td>
        </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
    <p class="no-data">No REQUEST data.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /REQUEST -->
  
  <div id="post">
    <h3>POST <span>($_POST)</span></h3>
    <? if( ! empty($_POST) ): ?>
    <a class="toggle">HIDE</a>
    <table id="post-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
        <? foreach($_POST as $key => $val): ?>
      <tr>
        <td><?= h($key); ?></td>
        <td class="code"><div><?= debug($val); ?></div></td>
      </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
    <p class="no-data">No POST data.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /POST -->
  
  <div id="sessions">
    <h3>SESSIONS <span>($_SESSION)</span></h3>
    <? if( ! empty($_SESSION) ): ?>
    <a class="toggle">HIDE</a>
    <table id="sessions-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
        <? foreach($_SESSION as $key => $val): ?>
      <tr>
        <td><?= h($key); ?></td>
        <td class="code"><div><?= debug($val); ?></div></td>
      </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
    <p class="no-data">No SESSION data.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /SESSIONS -->
  
  <div id="cookies">
    <h3>COOKIES <span>($_COOKIE)</span></h3>
    <? if( ! empty($_COOKIE) ): ?>
    <a class="toggle">HIDE</a>
    <table id="cookies-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
      <? foreach($_COOKIE as $key => $val): ?>
        <tr>
          <td><?= h($key); ?></td>
          <td class="code"><div><?= debug($val); ?></div></td>
        </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
    <p class="no-data">No cookie data.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /COOKIES -->
  
  <div id="get">
    <h3>GET <span>($_GET)</span></h3>
    <? if( ! empty($_GET) ): ?>
    <a class="toggle">HIDE</a>
    <table id="get-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
        <? foreach($_GET as $key => $val): ?>
      <tr>
        <td><?= h($key); ?></td>
        <td class="code"><div><?= debug($val); ?></div></td>
      </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
    <p class="no-data">No GET data.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /GET -->
  
  <? if (function_exists('page_vars')): ?>
  <div id="pagevars">
    <h3>PAGE_VARS <span>(App)</span></h3>
    <? $o = @page_vars()->__attributes; ?>
    <? if( ! empty($o) ): ?>
    <a class="toggle">HIDE</a>
    <table id="pagevars-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
      <? foreach($o as $key => $val): ?>
      <tr>
        <td><?= h($key); ?></td>
        <td class="code"><div><?= debug($val); ?></div></td>
      </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
    <p class="no-data">No page_vars() set.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /page_vars -->
  <? endif; ?>
  
  <? if (function_exists('current_user')): ?>
  <div id="current_user">
    <h3>CURRENT USER <span>(App)</span></h3>
    <? $o = @current_user()->__attributes; ?>
    <? if( ! empty($o) ): ?>
    <a class="toggle">HIDE</a>
    <table id="current_user-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
      <? foreach($o as $key => $val): ?>
      <tr>
        <td><?= h($key); ?></td>
        <td class="code"><div><?= debug($val); ?></div></td>
      </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
    <p class="no-data">No current_user() set.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /current_user -->
  <? endif; ?>

  <? if (function_exists('Settings')): ?>
  <div id="settings">
    <h3>SETTINGS <span>(App)</span></h3>
    <? $o = Settings(); ?>
    <? if( ! empty($o) ): ?>
    <a class="toggle">HIDE</a>
    <table id="settings-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
      <? foreach($o as $key => $val): ?>
      <tr>
        <td><?= h($key); ?></td>
        <? if ( is_object($val)): ?>
        <td class="code"><div><?= debug( (array) $val); ?></div></td>
        <? else: ?>
        <td class="code"><div><?= debug($val); ?></div></td>
        <? endif; ?>
      </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
    <p class="no-data">No Settings() set.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /SETTINGS -->
  <? endif; ?>
  
  <div id="options">
    <h3>OPTIONS <span>(Limonade/App)</span></h3>
    <? $o = option(); ?>
    <? if( ! empty($o) ): ?>
    <a class="toggle">HIDE</a>
    <table id="options-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
      <? foreach($o as $key => $val): ?>
      <tr>
        <td><?= h($key); ?></td>
        <td class="code"><div><?= debug($val); ?></div></td>
      </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
      <p class="no-data">No Options set.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /OPTIONS -->
  
  <div id="server">
    <h3>SERVER <span>($_SERVER)</span></h3>
    <? if( ! empty($_SERVER) ): ?>
    <a class="toggle">HIDE</a>
    <table id="server-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
        <? 
        $s = $_SERVER; ksort($s);
        foreach($s as $key => $val): 
        ?>
      <tr>
        <td><?= h($key); ?></td>
        <td class="code"><div><?= debug($val); ?></div></td>
      </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
    <p class="no-data">No SERVER data.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /SERVER -->
  
  <div id="env">
    <h3>ENV <span>($_ENV)</span></h3>
    <? if( ! empty($_ENV) ): ?>
    <a class="toggle">HIDE</a>
    <table id="env-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
      <? foreach($_ENV as $key => $val): ?>
        <tr>
          <td><?= h($key); ?></td>
          <td class="code"><div><?= debug($val); ?></div></td>
        </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
      <p class="no-data">No ENV data.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /ENV -->
  
  <div id="files">
    <h3>FILES <span>($_FILES)</span></h3>
    <? if( ! empty($_FILES) ): ?>
    <a class="toggle">HIDE</a>
    <table id="files-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
      <? foreach($_FILES as $key => $val): ?>
        <tr>
          <td><?= h($key); ?></td>
          <td class="code"><div><?= debug($val); ?></div></td>
        </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
      <p class="no-data">No FILES data.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /FILES -->
  
  <div id="put">
    <h3>PUT <span>(env()['PUT'])</span></h3>
    <? $p = env(); if( ! empty($p['PUT']) ): ?>
    <a class="toggle">HIDE</a>
    <table id="put-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
      <? foreach($p['PUT'] as $key => $val): ?>
        <tr>
          <td><?= h($key); ?></td>
          <td class="code"><div><?= debug($val); ?></div></td>
        </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
    <p class="no-data">No PUT data.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /PUT -->
  
  <div id="delete">
    <h3>DELETE <span>(env()['DELETE'])</span></h3>
    <? $p = env(); if( ! empty($p['DELETE']) ): ?>
    <a class="toggle">HIDE</a>
    <table id="delete-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
      <? foreach($p['DELETE'] as $key => $val): ?>
        <tr>
          <td><?= h($key); ?></td>
          <td class="code"><div><?= debug($val); ?></div></td>
        </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
    <p class="no-data">No DELETE data.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /DELETE -->
  
  <div id="head">
    <h3>HEAD <span>(env()['HEAD'])</span></h3>
    <? $p = env(); if( ! empty($p['HEAD']) ): ?>
    <a class="toggle">HIDE</a>
    <table id="head-info" class="req">
      <tr>
        <th class="key">Variable</th>
        <th class="value">Value</th>
      </tr>
      <? foreach($p['HEAD'] as $key => $val): ?>
        <tr>
          <td><?= h($key); ?></td>
          <td class="code"><div><?= debug($val); ?></div></td>
        </tr>
      <? endforeach; ?>
    </table>
    <? else: ?>
    <p class="no-data">No HEAD data.</p>
    <? endif; ?>
    <div class="clear"></div>
  </div> <!-- /HEAD -->
  
  <p id="explanation">You're seeing this output because you have enabled <code>option('debug.settings')</code>.</p>
  
</div> <!-- /#settings.wrap -->
<script> 
  $(document).ready(function() {
    $('#settings.wrap div a.toggle').click(function() {
      var section = $(this).parent().attr('id');
      $('#' + section + '-info').fadeToggle("slow", "linear");
      $(this).text($(this).text() == 'SHOW' ? 'HIDE' : 'SHOW');
    });
  });
</script>
<style type="text/css" media="screen">
  /* WRAP */
  #settings.wrap *{margin:0;padding:0;border:0;outline:0;}
  #settings.wrap { width:960px; background:#FFF;margin:2em auto;padding:30px 20px 20px 20px; border:1px solid #ccc; font-family:'Lucida Grande','Lucida Sans Unicode','Garuda'; }
  #settings.wrap div.clear{clear:both;}
  #settings.wrap pre { margin:0em 0; white-space:pre; overflow: auto; width: 700px; }
  #settings.wrap pre, code, tt { font:12px Menlo, Monaco, 'Andale Mono', 'Lucida Console', monospace;line-height:16px;}
  #settings.wrap li{height:18px;}
  #settings.wrap ul{list-style:none;margin:0;padding:0;}
  #settings.wrap ol:hover{cursor:pointer;}
  #settings.wrap ol li{white-space:pre;}
  #settings.wrap #explanation{font-size:12px;color:#666;margin:20px 0 0 0; text-align:center;}
  #settings.wrap #explanation code {background-color: #efefef; padding: 3px; color:#981919;}
  #settings.wrap h2{margin:0;font-size:16px;color:#981919;text-align:center;padding-bottom:10px;border-bottom:1px solid #ccc;}
  #settings.wrap h2 span {color:#ccc; }
  #settings.wrap h3{ float:left;width:213px;margin: 30px 0 10px 0;color:#981919;font-size:14px;font-weight:bold;}
  #settings.wrap h3:hover { cursor: pointer; }
  #settings.wrap h3 span { font-size: 10px; color: #ccc; } 
  #settings.wrap a.toggle { font-size: 10px; color: #ccc; float: right; margin: 34px 5px 0; text-decoration: none;} 
  #settings.wrap a.toggle:hover { cursor: pointer; color: #981919;}
  /* BODY */
  #backtrace,#get,#post,#cookies, #server, #sessions, #files, #env, #delete, #head, #put, #options{width:960px;margin: 15px auto;}
  #settings.wrap p#nav{float:right;font-size:14px;}
  /* BACKTRACE * /
  #settings.wrap a#expando{float:left;padding-left:5px;color:#666;font-size:14px;text-decoration:none;cursor:pointer;}
  #settings.wrap a#expando:hover{text-decoration:underline;}
  #settings.wrap #nav a{color:#666;text-decoration:none;padding:0 5px;}
  #settings.wrap #backtrace li.frame-info{background:#f7f7f7;padding-left:10px;font-size:12px;color:#333;}
  #settings.wrap #backtrace ul{list-style-position:outside;border:1px solid #E9E9E9;border-bottom:0;}
  #settings.wrap #backtrace ol{width:920px;margin-left:50px;font:10px 'Lucida Console',monospace;color:#666;}
  #settings.wrap #backtrace ol li{border:0;border-left:1px solid #E9E9E9;padding:2px 0;}
  #settings.wrap #backtrace ol code{font-size:10px;color:#555;padding-left:5px;}
  #settings.wrap #backtrace-ul li{border-bottom:1px solid #E9E9E9;height:auto;padding:3px 0;}
  #settings.wrap #backtrace-ul .code{padding:6px 0 4px 0;}
  #settings.wrap #backtrace-output.hidden { display:none; }
  /* REQUEST DATA */
  #settings.wrap p.no-data{margin:30px 0 10px 0; float: left; padding-top:2px; padding-left: 10px; font-size:12px;color:#666;}
  #settings.wrap table.req{width:100%;text-align:left;font-size:12px;color:#666;padding:0;border-spacing:0;border:1px solid #EEE;border-bottom:0;border-left:0;clear:both}
  #settings.wrap table.req tr th{padding:4px 10px;font-weight:bold;background:#F7F7F7;border-bottom:1px solid #EEE;border-left:1px solid #EEE;}
  #settings.wrap table.req tr th.key { width: 200px;}
  #settings.wrap table.req tr th.value { width: 740px;}
  
  #settings.wrap table.req tr td{padding:4px 20px 4px 10px;border-bottom:1px solid #EEE;border-left:1px solid #EEE;}
  /* HIDE PRE/POST CODE AT START */
  #settings.wrap .pre-context,
  #settings.wrap .post-context{display:none;}
  #settings.wrap table td.code { width:740px; overflow: hidden }
/*  #settings.wrap table td.code div{overflow:hidden}*/
  #settings.wrap table td.code div{overflow: auto}
  #settings.wrap table td.code div span.null-value { color: #ccc;}
  #settings.wrap table td.code div pre { margin: 0; font-size: 100%; }
</style>