<nav class="navbar navbar-default">
   <div class="container">
    <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a href="<?php echo base_url("frontend/index")?>"><img src="<?php echo base_url("asset/images/logo.png")?> " class='img-banner'></a> </div>
     <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right nav-menu">
			<li class="active" ><a href="<?php echo base_url("frontend/index")?>"> <i class="fa fa-home "></i> </a></li>
			<li ><a href="<?php echo base_url("frontend/about")?>"><i class="fa fa-university"></i> เกี่ยวกับเรา</a></li>
			<li><a href="<?php echo base_url("frontend/contact")?>"><i class="fa fa-phone"></i> ติดต่อ</a></li>
			<li><a href="<?php echo base_url("frontend/catalog ")?>"><i class="fa fa-align-justify"></i> ผลงาน</a></li>
			<li class="dropdown "><a  data-toggle="dropdown" class="" href="#"><i class="fa fa-caret-square-o-down"></i></i> บริการ <span class="caret"></span></a>
              <ul class="dropdown-menu  " >
                <li class= "bo"><a href="" style="font-size: 15px;margin-left: 0px;">service platform</a></li>
                <li class= "bo"><a href="http://stdb.most.go.th/Home"style="font-size: 15px;margin-left: 0px;">ฐานข้อมูลโครงสร้างพื้นฐาน ภาครัฐ</a></li>  
                <li class= "bo"><a href=""style="font-size: 15px;margin-left: 0px;">IRCT platform</a></li>
                <li class= "bo"><a href=""style="font-size: 15px;margin-left: 0px;">co-research platform</a></li>	
                <li class= "bo"><a href=""style="font-size: 15px;margin-left: 0px;">บ่มเพาะ TBI platform </a></li>	 				
      </ul>
	          </li>
			<li class="dropdown "><a  data-toggle="dropdown" class="" href="#"><i class="fa fa-key"></i> เข้าสู่ระบบ  <span class="caret"></span></a>
              <ul class="dropdown-menu " >
                <li class= "bo"><a href="<?php echo base_url("frontend/personlogin")?>" style="font-size: 15px;margin-left: 0px;">ผู้ประกอบการ</a></li><br>
                <li class= "bo"><a href="<?php echo base_url("frontend/officerlogin")?>"style="font-size: 15px;margin-left: 0px;">ผู้เจ้าหน้าที่</a></li>                   
      </ul>
	          </li>
      </ul>
    </div>
  </div>
</nav>