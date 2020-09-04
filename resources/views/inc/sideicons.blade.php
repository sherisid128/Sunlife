<div class="sidebar" style="background-color:#76c8ba;">
    <a href="/dashboard" style="color:white;"> SUNLIFE <br><small> ASSISTED LIVING</small></a>
    <a href="/dashboard" style="color:white;"> MENU</a>
    <a href="/dashboard" style="color:white;"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="#" style="color:white;"><i class="glyphicon glyphicon-user"></i> Patients</a>
    <a href="/employee" style="color:white;"><i class="glyphicon glyphicon-heart-empty"></i> Employees</a>
    <a href="#" style="color:white;"><i class="glyphicon glyphicon-file"></i> Reports</a>
    <a href="/dcvault" style="color:white;"><i class="glyphicon glyphicon-list-alt"></i> Document Vault</a>
    <a href="/help" style="color:white;"><i class="glyphicon glyphicon-info-sign"></i> Help</a>
</div>
<style>
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow:hidden;
}

/* Sidebar links */
.sidebar a {
  display: block;
  padding: 10px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

/* Links on mouse-over */


/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>    