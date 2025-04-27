<style>
    .product-desc {
        display: flex;
        align-items: center;
        padding: 20px;
    }
    .text-section {
        margin-right: 20px;
    }
    .product-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .product-description {
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 10px;
    }
    .image-section {
        flex: 1;
        display: flex;
        justify-content: center;
    }
    .product-image {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }
    @media (max-width: 768px) {
        .product-desc {
            flex-direction: column;
            text-align: center;
        }
        .text-section {
            margin-right: 0;
            margin-bottom: 20px;
        }
    }
</style>

<div class="product-desc">
    <div class="text-section pe-4">
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
