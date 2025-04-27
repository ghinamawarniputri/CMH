<div class="product-desc">
    <div class="text-section pe-3">
        <h2 class="product-title">{{ $title }}</h2>
        <p class="product-description">{{ $description1 }}</p>
        <p class="product-description">{{ $description2 }}</p>
        <p class="product-description">{{ $description3 }}</p>
    </div>
    <div class="image-section">
        <img
            src="{{ asset($image) }}"
            alt="{{ $imageAlt }}"
            class="product-image"
        />
    </div>
</div>
