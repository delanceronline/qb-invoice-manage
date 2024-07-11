<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            
            <svg xmlns='http://www.w3.org/2000/svg' id="background" class="absolute -left-20 top-0 max-w-[877px]" width='250' height='30' viewBox='0 0 1000 120'><rect fill='#000000' width='1000' height='120'/><g fill='none' stroke='#222' stroke-width='10' ><path d='M-500 75c0 0 125-30 250-30S0 75 0 75s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/><path d='M-500 45c0 0 125-30 250-30S0 45 0 45s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/><path d='M-500 105c0 0 125-30 250-30S0 105 0 105s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/><path d='M-500 15c0 0 125-30 250-30S0 15 0 15s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/><path d='M-500-15c0 0 125-30 250-30S0-15 0-15s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/><path d='M-500 135c0 0 125-30 250-30S0 135 0 135s125 30 250 30s250-30 250-30s125-30 250-30s250 30 250 30s125 30 250 30s250-30 250-30'/></g></svg>

            <svg xmlns='http://www.w3.org/2000/svg' id="background" class="absolute" viewBox='0 0 800 800'><rect fill='#330033' width='800' height='800'/><g fill='none' stroke='#404'  stroke-width='1'><path d='M769 229L1037 260.9M927 880L731 737 520 660 309 538 40 599 295 764 126.5 879.5 40 599-197 493 102 382-31 229 126.5 79.5-69-63'/><path d='M-31 229L237 261 390 382 603 493 308.5 537.5 101.5 381.5M370 905L295 764'/><path d='M520 660L578 842 731 737 840 599 603 493 520 660 295 764 309 538 390 382 539 269 769 229 577.5 41.5 370 105 295 -36 126.5 79.5 237 261 102 382 40 599 -69 737 127 880'/><path d='M520-140L578.5 42.5 731-63M603 493L539 269 237 261 370 105M902 382L539 269M390 382L102 382'/><path d='M-222 42L126.5 79.5 370 105 539 269 577.5 41.5 927 80 769 229 902 382 603 493 731 737M295-36L577.5 41.5M578 842L295 764M40-201L127 80M102 382L-261 269'/></g><g  fill='#505'><circle  cx='769' cy='229' r='5'/><circle  cx='539' cy='269' r='5'/><circle  cx='603' cy='493' r='5'/><circle  cx='731' cy='737' r='5'/><circle  cx='520' cy='660' r='5'/><circle  cx='309' cy='538' r='5'/><circle  cx='295' cy='764' r='5'/><circle  cx='40' cy='599' r='5'/><circle  cx='102' cy='382' r='5'/><circle  cx='127' cy='80' r='5'/><circle  cx='370' cy='105' r='5'/><circle  cx='578' cy='42' r='5'/><circle  cx='237' cy='261' r='5'/><circle  cx='390' cy='382' r='5'/></g></svg>
            
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                            width="150.000000pt" height="142.000000pt" viewBox="0 0 150.000000 142.000000"
                            preserveAspectRatio="xMidYMid meet">
                            <metadata>
                            Created by potrace 1.10, written by Peter Selinger 2001-2011
                            </metadata>
                            <g transform="translate(0.000000,142.000000) scale(0.050000,-0.0500000)"
                            fill="#999999" stroke="#000000">
                            <path d="M924 2416 c-391 -75 -663 -313 -771 -677 -25 -85 -28 -109 -27 -244
                            0 -132 3 -162 26 -247 94 -339 357 -600 693 -689 78 -21 113 -24 260 -24 144
                            1 183 4 255 23 47 13 96 25 110 27 14 2 45 8 70 14 43 8 43 9 10 9 -43 1 -99
                            -9 -210 -38 -102 -27 -233 -32 -351 -15 -171 26 -280 66 -411 152 -194 128
                            -329 311 -395 533 -25 86 -28 109 -28 250 0 144 2 162 30 250 82 264 265 469
                            508 570 192 80 332 98 537 69 47 -7 112 -11 145 -10 33 1 229 3 436 3 419 -1
                            441 -3 578 -70 185 -90 310 -304 295 -505 -6 -80 -17 -115 -70 -213 -24 -45
                            -44 -87 -44 -94 0 -7 20 -44 44 -84 104 -166 112 -368 23 -541 -46 -89 -168
                            -208 -251 -245 -37 -17 -70 -38 -73 -47 -3 -9 1 -36 11 -61 l16 -46 -27 -23
                            c-16 -12 -31 -22 -35 -23 -12 0 -10 14 3 27 6 6 8 20 4 32 -6 21 -1032 1053
                            -1129 1135 -58 50 -101 60 -131 30 -9 -9 -18 -14 -21 -11 -8 7 79 86 95 87 14
                            0 153 -118 286 -244 71 -67 95 -85 95 -72 0 9 -238 236 -308 295 l-73 60 -79
                            -67 c-43 -37 -111 -106 -150 -154 -39 -49 -76 -88 -81 -88 -5 0 -9 -4 -9 -8 0
                            -6 374 -384 397 -402 23 -17 -116 136 -226 249 -72 73 -131 139 -131 145 0 7
                            14 25 30 39 l30 27 0 -25 c0 -31 32 -66 424 -466 155 -157 377 -385 495 -505
                            118 -120 222 -225 232 -232 25 -17 51 -3 126 69 58 55 103 87 103 72 0 -13
                            -204 -213 -217 -213 -7 0 -66 53 -131 117 -153 151 -282 267 -288 260 -5 -5
                            411 -427 421 -427 2 0 62 58 132 128 71 70 142 134 159 142 54 24 58 42 18 93
                            -37 48 -38 67 -2 67 37 0 139 63 202 124 66 64 124 153 152 233 25 72 30 243
                            10 323 -17 66 -73 177 -101 200 -22 18 -19 31 20 96 108 179 112 343 14 534
                            -72 141 -197 239 -369 293 -59 19 -98 21 -420 25 -230 2 -380 0 -425 -7 -56
                            -9 -87 -8 -154 4 -126 22 -274 27 -357 11z m725 -1340 c311 -311 579 -575 594
                            -587 l28 -22 -43 -19 c-25 -11 -71 -48 -110 -89 l-66 -71 -38 43 c-39 45 -161
                            171 -757 777 -191 194 -347 359 -347 365 0 11 157 167 168 167 3 0 260 -254
                            571 -564z"/>
                            <path d="M885 2335 c-247 -46 -476 -218 -594 -444 -25 -49 -51 -120 -67 -187
                            -24 -99 -26 -122 -21 -244 6 -156 31 -254 98 -379 132 -246 347 -408 609 -457
                            152 -29 389 -12 515 36 38 15 75 49 75 70 0 13 -121 140 -225 238 -2 2 -68 3
                            -147 3 -121 -1 -155 2 -213 20 -66 20 -159 72 -185 104 -17 21 -3 19 28 -3 38
                            -27 134 -70 163 -74 13 -2 29 -6 34 -9 6 -3 26 -6 45 -7 23 -1 10 5 -39 19
                            -164 45 -268 126 -328 256 -50 109 -59 170 -40 267 23 110 63 191 130 257 87
                            87 179 127 352 153 17 3 -4 3 -45 1 -111 -5 -177 -30 -279 -103 -105 -74 -173
                            -207 -187 -363 -8 -104 -16 -101 -13 6 3 145 46 243 150 345 129 125 301 178
                            464 143 189 -41 345 -179 391 -345 18 -63 20 -178 4 -251 -6 -30 -7 -63 -3
                            -74 13 -32 216 -243 235 -243 77 0 146 239 136 468 -6 141 -36 245 -101 360
                            -110 192 -239 306 -452 399 -113 49 -337 67 -490 38z m297 -30 c186 -24 328
                            -95 464 -230 214 -213 291 -474 228 -778 -12 -57 -58 -191 -70 -206 -2 -2 -23
                            18 -46 45 -23 27 -73 81 -111 121 -65 67 -68 73 -55 95 9 16 13 64 13 154 l0
                            131 -42 85 c-121 243 -404 364 -660 283 -190 -60 -343 -222 -383 -406 -17 -78
                            -8 -219 19 -294 43 -122 145 -240 269 -312 88 -52 294 -79 403 -54 36 8 37 8
                            153 -106 91 -90 112 -115 98 -120 -9 -3 -33 -12 -52 -20 -113 -46 -360 -60
                            -520 -29 -131 25 -271 99 -377 200 -111 105 -193 229 -235 356 -31 92 -32 100
                            -32 270 0 150 3 185 21 245 95 316 378 542 723 578 68 7 86 6 192 -8z m-591
                            -990 c9 -25 13 -45 9 -45 -8 0 -40 73 -40 92 0 20 14 -1 31 -47z"/>
                            <path d="M1593 2315 c-13 -9 -23 -24 -23 -33 0 -9 62 -76 138 -148 l137 -131
                            148 -6 c107 -4 156 -10 182 -23 36 -17 80 -63 70 -73 -4 -3 -10 1 -15 9 -6 8
                            -10 12 -10 7 0 -4 12 -25 26 -47 22 -33 26 -48 21 -81 -3 -23 -11 -47 -17 -53
                            -7 -7 -58 -11 -141 -11 l-129 0 0 26 c0 15 -16 59 -36 99 -30 59 -34 74 -23
                            82 12 8 11 9 -1 5 -20 -6 -17 -43 9 -98 11 -24 22 -56 24 -71 1 -15 11 -36 21
                            -47 17 -19 28 -21 128 -18 60 2 111 0 114 -4 9 -14 -66 -39 -118 -39 -51 0
                            -84 -12 -105 -39 -9 -11 -13 -56 -12 -143 1 -159 5 -164 124 -170 83 -3 140
                            -28 130 -56 -3 -7 -1 -11 4 -7 12 7 51 -75 51 -108 0 -40 -20 -74 -49 -86 -14
                            -6 -92 -12 -173 -13 -81 0 -153 -5 -160 -10 -8 -5 54 -8 149 -7 90 2 165 0
                            169 -3 7 -8 -50 -26 -106 -33 -108 -13 -126 -17 -147 -27 -50 -25 -23 -70 133
                            -225 42 -41 85 -78 96 -82 34 -12 128 6 193 38 115 57 218 194 241 321 13 78
                            5 210 -17 277 -21 64 -66 135 -106 166 -31 25 -29 40 11 85 96 105 125 259 84
                            432 -35 148 -148 263 -323 331 -47 18 -95 21 -375 25 -258 4 -298 3 -317 -11z
                            m447 -28 c175 -3 201 -6 255 -27 185 -71 295 -230 295 -424 0 -134 -39 -227
                            -126 -304 l-57 -50 29 -15 c42 -22 112 -100 133 -150 59 -138 51 -309 -20
                            -433 -59 -103 -180 -188 -288 -201 l-50 -6 -118 123 c-65 67 -119 125 -121
                            129 -1 5 46 11 105 15 138 8 186 30 222 100 29 56 33 144 9 191 -42 79 -113
                            117 -214 114 -41 -1 -74 1 -74 4 0 4 0 66 0 137 l0 130 58 0 c114 0 186 41
                            218 125 39 104 -3 213 -100 260 -45 22 -67 25 -197 28 l-146 4 -77 81 c-43 44
                            -102 99 -132 122 -30 24 -54 45 -54 49 0 3 57 5 127 4 71 -2 216 -4 323 -6z"/>
                            <path d="M1115 1950 c-2 -4 16 -10 42 -14 93 -12 214 -93 288 -190 53 -70 75
                            -143 78 -253 2 -79 4 -89 14 -70 16 28 6 134 -22 229 -13 46 -73 136 -111 169
                            -45 39 -129 92 -168 105 -61 22 -116 33 -121 24z"/>
                            <path d="M1960 1229 c0 -6 -10 -24 -21 -41 -27 -38 -69 -116 -69 -129 0 -21
                            20 4 58 74 46 86 55 107 42 107 -6 0 -10 -5 -10 -11z"/>
                            </g>
                            </svg>
                        </div>                        
                    </header>

                    <main class="mt-6">
                        <div class="text-center">
                            Welcome!
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-center">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif                        
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        QB Invoice Management 2020
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>