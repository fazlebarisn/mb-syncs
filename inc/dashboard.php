<div class="wrap mb-syncs-admin">
    <h1>Modern Beauty Synchronize</h1>

    <ul class="mb-syncs-tabs">
        <li class="mb-syncs-tab active" data-tab="tab-1">Products Cron Sync</li>
        <li class="mb-syncs-tab" data-tab="tab-2">Product Sync</li>
        <li class="mb-syncs-tab" data-tab="tab-3">Categories Sync</li>
        <li class="mb-syncs-tab" data-tab="tab-4">Customer Sync</li>
    </ul>
    <div class="mb-syncs-content first active" id="tab-1">
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

    </div>
    <div class="mb-syncs-content" id="tab-2">
        <div class="d-flex">
            <form method="GET">
                <input type="hidden" name="pageno" value="1">
                <input type="hidden" name="post_type" value="product">
                <input type="hidden" name="page" value="product-sync">
                <?php
                submit_button('All ICITEM Product Sync', 'primary', 'mb-product-icitem-sync');
                ?>
            </form>
            <form method="GET">
                <input type="hidden" name="pagenoformeta" value="1">
                <input type="hidden" name="post_type" value="product">
                <input type="hidden" name="page" value="product-sync">
                <?php
                submit_button('All ICPRICP Product Sync', 'primary', 'mb-product-icpricp-sync');
                ?>
            </form>
            <form method="GET">
                <input type="hidden" name="pagenoforloc" value="1">
                <input type="hidden" name="post_type" value="product">
                <input type="hidden" name="page" value="product-sync">
                <?php
                submit_button('All ICILOC Product Sync', 'primary', 'mb-product-iciloc-sync');
                ?>
            </form>
        </div>
    </div>
    <div class="mb-syncs-content" id="tab-3">
        <div class="d-flex mb-category-sync">
            <form method="POST">
                <?php 
                    submit_button( 'Sync Product Categories', 'primary', 'mb-submit-product-categories-sync' );

                    submit_button( 'Start Cron From Now', 'primary', 'mb-submit-start-cron' );
                ?>
            </form>
        </div>
    </div>
    <div class="mb-syncs-content" id="tab-4">
        <div class="d-flex mb-customer-sync">
            <form method="GET">
                <input type="hidden" name="pageno" value="1">
                <input type="hidden" name="page" value="mb-customer-sync">
                <?php submit_button('Get All Customer metadata from arcmn Table', 'primary', 'mb-customer-metadata-sync'); ?>
            </form>
            <form method="POST">
                <?php 
                    submit_button( 'Start arcmm Cron Now', 'primary', 'mb-arcmm-sync-cron' );
                    submit_button( 'Menual Start', 'primary', 'mb-arcmm-menual-sync-cron' );
                ?>
            </form>
        </div>
    </div>
</div>