<?php
function user_panel()
{
    return true;
}
function get_title() {
    return "جزئیات سفارش";
}
function get_content()
{
    global $AllofMyOrder;
?>
    <section class="grid-lg-2to5">
        <section class="page_content">
            <h3 class="page_content_title">سفارشات من </h3>
            <?php 
            foreach ($AllofMyOrder as $myOrder) {
                Template::Include('Orders',$myOrder);
            }
            ?>
        </section>    
    </section>
<?php 
}
 
