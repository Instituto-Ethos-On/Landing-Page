    <meta name="robots" content="index,follow"/> 
    <meta name="revisit-after" content="7 days">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="url" content="{{ request()->fullUrl() }}">
    @isset($metaArray->og_image)
    <meta name="og_image" content="{{ asset('images/logo.png')  }}"/>
    <meta name="og_secureImage" content="{{ asset('images/logo.png')  }}"/>
    <meta name="og_imageAlt" content="Ethos on"/>
    <meta name="og_imageType" content="png"/>
    @endisset
    <meta name="rating" content="General">
    <meta property=”og:title” content="Ethos On: Educação digital"/>
    <meta property="og:description" content="Instituto de Educação Digital Ethos On"/>
    <meta property=”og:type” content="website"/>
    <meta property="og:locale" content="pt_br" />
    <meta property="og:url" content="{{ request()->fullUrl() }}"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@ethos_on"/>
    {{-- TODO: usar metadados, talvez criar um db pra guardar essas informações --}}