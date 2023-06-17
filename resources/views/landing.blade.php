
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>emaza_Game Server</title>
    @include('base.include-seo')
</head>
<body class="is-boxed has-animations">
<div class="body-wrap">
    @include('landing.header')

    <main>
        @include('landing.include-section')

        @include('landing.include-card')
        @include('landing.include-precing')

        <section class="cta section">
            <div class="container">
                <div class="cta-inner section-inner">
                    <h3 class="section-title mt-0">que tal baixar agora?</h3>
                    <div class="cta-cta">
                        <a class="button button-primary button-wide-mobile" href="#">baixar</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('landing.include-footer')
</div>

@include('base.include-js')
</body>
</html>
