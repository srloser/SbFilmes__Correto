<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>SBFilmes - Área restrita</title>
        <meta name="keywords" content="web store, FAQs, free templates, website templates, CSS, HTML" />
        <meta name="description" content="Web Store Theme, FAQs, free CSS template provided by templatemo.com" />
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

    </head>

    <body id="subpage">

        <div id="templatemo_wrapper">
            <div id="templatemo_header">
                <div id="site_title">
                    <h1><a href="index.php">sbfilmes</a></h1>
                </div>

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
                            <input type="text" value="Pesquisar" name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                            <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                        </form>
                    </div>
                </div> <!-- END -->
            </div> <!-- END of header -->

            <div id="templatemo_menu" class="ddsmoothmenu">
                <ul>
                    
                </ul>
                <br style="clear: left" />
            </div> <!-- end of templatemo_menu -->

            <div class="cleaner h20"></div>
            <div id="templatemo_main_top"></div>
            <div id="templatemo_main">
                <div id="sidebar">
                    


                </div> <!-- END of sidebar -->

                <div id="content" class="faq">
                    <h2>Cadastro de cliente</h2>
                    <form name="form" method="POST" action="salvar_cliente.php">
                        Nome<input type="text" name="nome" size="70" />
                        <p></p>
                        Data de Nascimento<input type="text" name="dt_nasc"  />
                        <p></p>
                        RG<input type="text" name="rg" size="40"  />
                        <p></p>
                        CPF<input type="text" name="cpf" size="40"  />
                        <p></p>
                        Email<input type="text" name="email" size="50"  />
                        <p></p>
                        Cidade<input type="text" name="cidade" size="50"  />
                        <p></p>
                        Telefone<input type="text" name="telefone"  />
                        <p></p>
                        Rua<input type="text" name="rua"  />
                        <p></p>
                        Numero<input type="text" name="numero"  />
                        <p></p>
                        Senha<input type="password" name="senha"  />
                        <p></p>
                        <input type="submit" value="Salvar" name="salvar" />
                    </form>
                </div> <!-- END of content -->
                <div class="cleaner"></div>
            </div> <!-- END of main -->

            <div id="templatemo_footer">
                
                <div class="cleaner h40"></div>
                <center>
                    Copyright © 2048 Your Company Name | Designed by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
                </center>
            </div> <!-- END of footer -->   

        </div>

    </body>
</html>