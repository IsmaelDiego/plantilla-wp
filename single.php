<?php get_header(); ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Simple card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img class="card-img img-fluid" src="" alt="Card image cap">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <p class="card-text">PRECIO: $50</p>
                                    <p class="card-text">PRECIO DE OFERTA: $40</p>
                                    <div class="input-group input-group-sm mb-3">
                                        <button class="btn btn-danger" type="button" id="minusBtn" onclick="cambiar_cantidad('resta')">-</button>
                                        <input type="text" class="form-control text-center" minlength="0" id="cantidad" value="1" placeholder="1" aria-label="Quantity" aria-describedby="basic-addon2">
                                        <button class="btn btn-primary" type="button" onclick="cambiar_cantidad('suma')">+</button>
                                    </div>
                                    <p id="totalPrice" class="mb-0">Total Price: $50</p>
                                    <a href="#" class="btn btn-primary btn-sm">Add to Cart</a>
                                </div>
                            </div>
                            <hr>
                            <p class="small text-muted">Published: June 27, 2024 | 10:00 AM</p>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end page-content -->
</div><!-- end main-content -->

<script>
    function cambiar_cantidad(tipo) {
            var cantidad_actual = document.getElementById('cantidad').value;
            if (tipo == "suma") {
                var cantidad_nueva = parseInt(cantidad_actual) + 1;
            } else {
                if (tipo == "resta" && cantidad_actual > 1) {
                    var cantidad_nueva = parseInt(cantidad_actual) - 1;
                } else {
                    var cantidad_nueva = 0;
                }
            }
            document.getElementById('cantidad').value = cantidad_nueva;
        }
        
    

</script>

<?php get_footer(); ?>
