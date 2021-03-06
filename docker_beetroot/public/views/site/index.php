<?php
include ROOT . '/views/layouts/header.php'; ?>

<div class="col-sm-9 padding-right">
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Gods</h2>

        <?php
        foreach ($Products as $product): ?>
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="<?php
                            echo Product::getImage($product['id']); ?>" alt=""/>
                            <h2>$<?php
                                echo $product['price']; ?></h2>
                            <p>
                                <a href="/product/<?php
                                echo $product['id']; ?>">
                                    <?php
                                    echo $product['name']; ?>
                                </a>
                            </p>
                            <a href="#" class="btn btn-default add-to-cart" data-id="<?php
                            echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                        </div>
                        <?php
                        if ($product['is_new']): ?>
                            <img src="/template/images/home/new.png" class="new" alt=""/>
                        <?php
                        endif; ?>
                    </div>
                </div>
            </div>
        <?php
        endforeach; ?>


    </div><!--features_items-->


    <?php
    include ROOT . '/views/layouts/footer.php'; ?>
