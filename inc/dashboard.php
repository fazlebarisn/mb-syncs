<div class="wrap mb-syncs-admin">
    <h1>Modern Beauty Synchronize</h1>

    <ul class="mb-syncs-tabs">
        <li class="mb-syncs-tab active" data-tab="tab-1">Cron Sincronize </li>
        <li class="mb-syncs-tab" data-tab="tab-2">Tab Two</li>
        <li class="mb-syncs-tab" data-tab="tab-3">Tab Three</li>
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

            <form method="POST">
                <?php
                submit_button('Start Trash Cron Now', 'primary', 'mb-trash-product-sync-cron');
                ?>
            </form>
        </div>

    </div>
    <div class="mb-syncs-content" id="tab-2">
        <p>
            I put my armor on, show you how strong I am
            I put my armor on, I'll show you that I am
            I'm unstoppable
            I'm a Porsche with no brakes
            I'm invincible
            Yeah, I win every single game
            I'm so powerful
            I don't need batteries to play
            I'm so confident
            Yeah, I'm unstoppable today
        </p>
    </div>
    <div class="mb-syncs-content" id="tab-3">
        <p>
            Break down, only alone I will cry out loud
            You'll never see what's hiding out
            Hiding out deep down
            Yeah, yeah
            I know, I've heard that to let your feelings show
            Is the only way to make friendships grow
            But I'm too afraid now
            Yeah, yeah
        </p>
    </div>
</div>