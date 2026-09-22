<style>
    .ct-hero {
        position: relative;
        height: 600px;
        display: flex;
        align-items: center;
        color: #fff;
        padding-top: 80px;
    }
    .ct-hero-container {
        width: 100%;
        max-width: var(--container-max);
        margin: 0 auto;
        padding: 0 var(--space-100);
        display: flex;
        flex-direction: column;
    }
    .ct-hero-grid {
        display: grid;
        grid-template-columns: max-content 1fr;
        column-gap: 16px;
        row-gap: 40px;
        width: 100%;
        align-items: start;
    }
    .ct-hero-title-left,
    .ct-hero-title-right {
        font-size: 64px;
        margin: 0;
        font-family: var(--font-heading);
        font-weight: 700;
        text-align: left;
    }
    .ct-hero-text {
        grid-column: 2;
        border-left: 2px solid #fff;
        padding-left: 24px;
        padding-top: 8px;
        padding-bottom: 8px;
        font-size: 18px;
        line-height: 1.6;
        max-width: 600px;
        text-align: left;
    }
    @media (max-width: 768px) {
        .ct-hero-grid {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .ct-hero-title-left {
            font-size: 40px;
            align-self: flex-start;
        }
        .ct-hero-title-right {
            font-size: 40px;
            align-self: flex-start;
            margin-left: 55px;
        }
        .ct-hero-container {
            padding: 0 var(--space-16);
        }
        .ct-hero-text {
            grid-column: 1;
            max-width: 100%;
            border-left: none;
            padding-left: 0;
            text-align: justify;
        }
    }
</style>

<div class="ct-hero" style="background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ $bgImage }}') center/cover;">
    <div class="ct-hero-container">
        <div class="ct-hero-grid">
            <h1 class="ct-hero-title-left">{{ $titleLeft }}</h1>
            <h1 class="ct-hero-title-right">{{ $titleRight ?? '' }}</h1>
            <div class="ct-hero-text">
                {{ $text }}
            </div>
        </div>
    </div>
</div>
