<!--{*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2012 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *}-->
<link rel="stylesheet" href="<!--{$TPL_URLPATH}-->css/bootstrap.min.css" type="text/css" media="all" />
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top:10px;" onmousemove="showClick();" onmouseout="hideClick();">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img class="slide-image" src="<!--{$TPL_URLPATH}-->img/banner/1234.jpg" style="width: 1200px;" alt="">
        </div>
        <div class="item">
            <img class="slide-image" src="<!--{$TPL_URLPATH}-->img/banner/1234.png" style="width: 1200px;" alt="">
        </div>
        <div class="item">
            <img class="slide-image" src="<!--{$TPL_URLPATH}-->img/banner/123.png"  style="width: 1200px;" alt="">
        </div>
    </div>
    <a id="left" class="left carousel-control" href="#carousel-example-generic" data-slide="prev" style="display:none;background:none;">
        <span class="glyphicon glyphicon-chevron-left" style="margin-left:-69px;background-color:#000000;padding-bottom:20px;padding-top:20px;width:50px;height:75px;margin-top:-40px;"></span>
    </a>
    <a id="right" class="right carousel-control" href="#carousel-example-generic" data-slide="next" style="display: none;background:none;">
        <span class="glyphicon glyphicon-chevron-right" style="margin-right:-68px;background-color:#000000;padding-bottom:20px;padding-top:20px;width:50px;height:75px;margin-top:-40px;"></span>
    </a>
</div>
<script type="text/javascript" src="<!--{$TPL_URLPATH}-->js/jquery.js"></script>
<script type="text/javascript" src="<!--{$TPL_URLPATH}-->js/bootstrap.min.js"></script>
<script type="text/javascript">
    function showClick(){
        document.getElementById('left').style.display = 'block';
        document.getElementById('right').style.display = 'block';
    }
    function hideClick(){
        document.getElementById('left').style.display = 'none';
        document.getElementById('right').style.display = 'none';
    }
</script>
