<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Store Theme - Product Details</title>
<meta name="keywords" content="web store, free templates, website templates, CSS, HTML" />
<meta name="description" content="Web Store Theme is a free CSS template provided by templatemo.com." />
<link href="css/template_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>

</head>

<body id="subpage">

<div id="templatemo_wrapper">
	<div id="templatemo_header">
    	<div id="site_title"><h1><a href="http://www.templatemo.com">Free CSS Templates</a></h1></div>
        
        <div id="header_right">
            <ul id="language">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
          </ul>
            <div class="cleaner"></div>
            <div id="templatemo_search">
                <form action="#" method="get">
                  <input type="text" value="Search" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
         </div> <!-- END -->
    </div> <!-- END of header -->
    
    <div id="templatemo_menu" class="ddsmoothmenu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
      <br style="clear: left" />
    </div> <!-- end of templatemo_menu -->
    
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	
        <div id="sidebar">
        	<h3>Categorias do Filme</h3>
            <ul class="sidebar_menu">
			     <?php
                        require('config/config.php');
                        $sql = 'SELECT nome FROM categoria WHERE id_categoria = '.$_GET['categoria'];
                        $query = mysqli_query($con, $sql);

                        while($categoria = mysqli_fetch_array($query)){
                         echo "<li>".$categoria['nome']."</li>";
                        }

                    ?> 
            </ul>
            
        </div> <!-- END of sidebar -->
        
        <div id="content">
        	<h2>Detalhes do Filme</h2>
            <?php
              require('config/config.php');
              $sql = 'SELECT * FROM filmes WHERE id_filme = '.$_GET['id'];
              $query = mysqli_query($con, $sql);

              while($filme = mysqli_fetch_array($query)){
                echo '<div class="col col_13">
            <a  rel="lightbox[portfolio]" href="admin/'.$filme['img'].'" title="'.$filme['nome'].'"><img src="admin/'.$filme['img'].'" alt="Image 10" /></a>            </div>
      <div class="col col_13 no_margin_right">
                <table>
                    <tr>
                        <td height="30" width="160">Price:</td>
                        <td>R$ '.$filme['preco'].'</td>
                    </tr>
                    
                    <tr>
                        <td height="30">Nome:</td>
                        <td>'.$filme['nome'].'</td>
                    </tr>
                    
                    <tr><td height="30">Quantity</td><td><input type="text" value="1" style="width: 20px; text-align: right" /></td></tr>
                </table>
                <div class="cleaner h20"></div>
                <a href="alugarfilme.php" class="add_to_cart">Alugar</a>
            </div>
            <div class="cleaner h30"></div>
            
            <h5><strong>Descriçaõ do produto</strong></h5>
            <p>'.$filme['descricao'].'</p>    ';
              }

            ?>        
            
            
            <div class="cleaner h50"></div>
            
            <h4>Outros produtos</h4>
        	<?php
              require('config/config.php');
              $sql = 'SELECT * FROM filmes LIMIT 5';
              $query = mysqli_query($con, $sql);

              while($filme = mysqli_fetch_array($query)){
                echo '<div class="col col_14 product_gallery">
              <a href="filmedetai.php?id='.$filme['id_filme'].'&&categoria='.$filme['id_categoria'].'"><img src="admin/'.$filme['img'].'" alt="Product 01" /></a>
                <h3>'.$filme['nome'].'</h3>
                <p class="product_price">R$ '.$filme['preco'].'</p>
              <a href="#" class="add_to_cart">Alugar</a>
            </div>     ';
              }

            ?>                        
<a href="index.php" class="more float_r">Ver todosl</a>
            
            <div class="cleaner"></div>
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
    
    <div id="templatemo_footer">
<div class="col col_16">
  <h4>Categorias</h4>
  <ul class="footer_menu">
    <li>Ação</li>
    <li>Comédia</li>
    <li>Animação</li>
    <li>Nacional</li>
  </ul>
</div>
<div class="col col_16">
  <h4>Paginas</h4>
  <ul class="footer_menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Filmes</a></li>
    <li><a href="#">Lançamentos</a></li>
    <li><a href="admin/index.php">Área Restrita</a></li>
  </ul>
</div>
<div class="col col_16">
          <h4>Social</h4>
          <ul class="footer_menu">
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">LinkedIn</a></li>
          </ul>
      </div>
  <div class="cleaner h40"></div>
		<center>
			Copyright © 2048 Your Company Name | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
		</center>
    </div> <!-- END of footer -->   
   
</div>

</body>
</html>