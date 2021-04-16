<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="lecture mx-auto">
        <img class="lecture-image" src="{{ asset($src) }}" alt="">
        <div class="lecture-info">
            <div class="lecture-title">
                {{ isset($title) ? $title : 'Unknown title' }}
                <div class="lecture-meta">{{ isset($meta) ? $meta : 'Unknown time' }}</div>
            </div>
            <div class="lecture-description">{{ isset($description) ? $description : 'Unknown decription' }}</div>
        </div>
    </div>
</div>
