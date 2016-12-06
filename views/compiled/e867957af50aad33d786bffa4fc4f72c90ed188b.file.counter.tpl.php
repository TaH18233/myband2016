<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 15:21:44
         compiled from "views/counter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126615901656010987369e36-14177263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e867957af50aad33d786bffa4fc4f72c90ed188b' => 
    array (
      0 => 'views/counter.tpl',
      1 => 1443704626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126615901656010987369e36-14177263',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560109873a9ed5_31719284',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560109873a9ed5_31719284')) {function content_560109873a9ed5_31719284($_smarty_tpl) {?>
<aside>
    <div>
        <section1>
            <h3>ps4 & xbox one release<div id="countdown">
                </div></h3>
        </section1>

        <section2>
            <h3>pc release<div id="newcountdown">
                </div></h3>
        </section2>
    </div>
</aside>


    <script>
        CountDownTimer('11/05/2015 00:00 AM', 'countdown');
        CountDownTimer('03/20/2016 05:30 AM', 'newcountdown');

        function CountDownTimer(dt, id)
        {
            var end = new Date(dt);

            var _second = 1000;
            var _minute = _second * 60;
            var _hour = _minute * 60;
            var _day = _hour * 24;
            var timer;

            function showRemaining() {
                var now = new Date();
                var distance = end - now;
                if (distance < 0) {

                    clearInterval(timer);
                    document.getElementById(id).innerHTML = 'EXPIRED!';

                    return;
                }
                var days = Math.floor(distance / _day);
                var hours = Math.floor((distance % _day) / _hour);
                var minutes = Math.floor((distance % _hour) / _minute);
                var seconds = Math.floor((distance % _minute) / _second);

                document.getElementById(id).innerHTML = days + 'days ';
                document.getElementById(id).innerHTML += hours + 'hrs ';
                document.getElementById(id).innerHTML += minutes + 'mins ';
                document.getElementById(id).innerHTML += seconds + 'secs';
            }

            timer = setInterval(showRemaining, 1000);
        }
    </script><?php }} ?>
