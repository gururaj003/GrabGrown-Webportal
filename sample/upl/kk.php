
  <?php  
 $connect = mysqli_connect("localhost", "root", "mysql", "farmer"); 
 $file =$_FILES['image']['name'];
 if(isset($file))
 {
  echo "select profile picture";
  
  else
  {
  $image=addslashes(file_get_content(C$_FILES['image']['name']));
  $image_name=addslashes($_FILES['image']['name'])
  $image_files=getimagefiles($_FILES['image']['name'])
  }
  if($imagefiles==FALSE)
  {
  echo "that is'nt image";
  $insert=mysqli_query("INSERT INTO sign values(',',',',',',',',',$image_name,'$image)")
  }
  }
  ?>