<div class="wrap mb-syncs-admin">
    <h1>Modern Beauty Synchronization</h1>

    <ul class="mb-syncs-tabs">
        <li class="mb-syncs-tab active" data-tab="tab-1">Products</li>
        <li class="mb-syncs-tab" data-tab="tab-2">Categories</li>
        <li class="mb-syncs-tab" data-tab="tab-3">Customer</li>
        <li class="mb-syncs-tab" data-tab="tab-4">images</li>
        <li class="mb-syncs-tab" data-tab="tab-5">Product Filter</li>
    </ul>
    <div class="mb-syncs-content first active" id="tab-1">
        <h1>Cron Synchronize</h1>
        <div class="d-flex">
            <form method="POST">
                <?php
                submit_button('Start ICITEM Cron Now', 'primary', 'mb-icitem-product-sync-cron');
                ?>
            </form>
            <form method="POST">
                <?php
                submit_button('Start ICPRICP Cron Now', 'primary', 'mb-icpricp-product-sync-cron');
                ?>
            </form>
            <form method="POST">
                <?php
                submit_button('Start ICILOC Cron Now', 'primary', 'mb-iciloc-product-sync-cron');
                ?>
            </form>
        </div>
        <h1>Menual Synchronize</h1>
        <div class="d-flex">
            <form method="GET">
                <input type="hidden" name="product-item-page" value="1">
                <input type="hidden" name="post_type" value="product">
                <input type="hidden" name="page" value="menual-product-sync">
                <?php
                submit_button('All ICITEM Product Sync', 'primary', 'mb-product-icitem-sync');
                ?>
            </form>
            <form method="GET">
                <input type="hidden" name="product-icpricp-page" value="1">
                <input type="hidden" name="post_type" value="product">
                <input type="hidden" name="page" value="menual-product-sync">
                <?php
                submit_button('All ICPRICP Product Sync', 'primary', 'mb-product-icpricp-sync');
                ?>
            </form>
            <form method="GET">
                <input type="hidden" name="product-iciloc-page" value="1">
                <input type="hidden" name="post_type" value="product">
                <input type="hidden" name="page" value="menual-product-sync">
                <?php
                submit_button('All ICILOC Product Sync', 'primary', 'mb-product-iciloc-sync');
                ?>
            </form>
        </div>

    </div>
    <div class="mb-syncs-content" id="tab-2">
        <div class="d-flex mb-category-sync">
            <form method="POST">
                <?php
                submit_button('Sync Product Categories', 'primary', 'mb-submit-product-categories-sync');
                submit_button('Start Cron From Now', 'primary', 'mb-submit-start-cron');
                ?>
            </form>
        </div>
    </div>
    <div class="mb-syncs-content" id="tab-3">
        <h1>Customer Synchronize</h1>
        <div class="d-flex">
            <form method="GET">
                <input type="hidden" name="page" value="mb-customer-sync">
                <input type="hidden" name="page_no" value="1">
                <?php submit_button('Run', 'primary', 'mb-all-customer-sync'); ?>
            </form>
            <form method="POST">
                <?php
                submit_button('Start ezposcustomer Cron Now', 'primary', 'mb-ezposcustomer-sync-cron');
                // submit_button( 'Menual Start', 'primary', 'mb-ezposcustomer-menual-sync-cron' );
                ?>
            </form>
        </div>
        <h1>Customer Pricelist Synchronize</h1>
        <div class="d-flex">
            <form method="GET">
                <input type="hidden" name="page-number" value="1">
                <input type="hidden" name="page" value="mb-customer-pricelist-sync">

                <?php submit_button('Get All Customer Pricelist from ezposcustomer Table', 'primary', 'mb-customer-pricelist-sync'); ?>
            </form>
            <form method="POST">
                <?php
                submit_button('Start ezposcustomer Cron Now', 'primary', 'mb-ezposcustomer-sync-cron');
                // submit_button( 'Menual Start', 'primary', 'mb-ezposcustomer-menual-sync-cron' );
                ?>
            </form>
        </div>
    </div>
    <div class="mb-syncs-content" id="tab-4">
        <h1>Product Images</h1>
        <div class="d-flex">
            <div class="d-flex">
                <form method="GET">
                    <input type="hidden" name="j3-upload-img" value="1">
                    <input type="hidden" name="page" value="mbai-sync">
                    <?php
                    submit_button('All Image Upload', 'primary', 'mb-all-img-upload');
                    ?>
                </form>
                <form method="GET">
                    <input type="hidden" name="j3-sync-img" value="1">
                    <input type="hidden" name="page" value="mbai-sync">
                    <?php
                    submit_button('All Image LInk Sync', 'primary', 'mb-all-img-link-sync');
                    ?>
                </form>
            </div>
        </div>
        <h1>Gallery Images</h1>
        <div class="d-flex">
            <form method="POST">
                <?php 
                    submit_button('Start Product Image Cron Now', 'primary', 'mb-product-image-sync-cron');
                ?>
            </form>
        </div>
    </div>
    <div class="mb-syncs-content" id="tab-5">
        <div class="d-flex">
            <form method="GET">
                    <input type="hidden" name="filter-page" value="1">
                    <input type="hidden" name="post_type" value="product">
                    <input type="hidden" name="page" value="product-filter-sync">
                <?php 
                    submit_button('Start Product Filter Sync', 'primary', 'mb-product-filter-sync');
                ?>
            </form>
        </div>
    </div>
</div>