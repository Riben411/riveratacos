<?php
/* Smarty version 3.1.33, created on 2018-11-29 07:17:22
  from 'C:\xampp\htdocs\riveratacos\views\inc\footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bff8472228829_36010427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4103b54c14c96e47874dd3739f6cce166942b06c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\riveratacos\\views\\inc\\footer.html',
      1 => 1543472239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bff8472228829_36010427 (Smarty_Internal_Template $_smarty_tpl) {
?>    <footer class="footer">

      <div class="wrapper row-between">
        <address>
          <small>Copyright RiveraTacos <?php echo date('Y');?>
 &copy;</small>
        </address>

        <div>
          <?php if (isset($_SESSION['usuario'])) {?>
          <button onclick="cerrarSesion()" class="btn" type="button" name="sesion">
            <i class="fas fa-sign-out-alt"></i> Salir
          </button>
          <?php } else { ?>
          <button onclick="mostrarFormulario()" class="btn" type="button" name="sesion">
            <i class="fas fa-sign-in-alt"></i> Login
          </button>
          <?php }?>
        </div>
      </div>

    </footer>

    <?php echo '<script'; ?>
 src="views/js/form_inicio_sesion.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="views/js/sesion_ajax.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
