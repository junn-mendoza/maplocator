<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Map Builder</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <livewire:welcome.navigation />
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class='flex items-center'>
                <div class="flex justify-center w-16">
                    <!--<svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>-->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 351 311" style="enable-background:new 0 0 351 311;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: #FFFFFF;
                            }

                            .st1 {
                                fill: #C987F9;
                            }

                            .st2 {
                                fill: #E81000;
                            }

                            .st3 {
                                fill: #E39DF4;
                            }

                            .st4 {
                                fill: #9400EA;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M4.31,305.09c2.16-0.6,3.54-0.89,4.85-1.37c27.31-10.01,54.6-20.1,81.96-29.97c2.11-0.76,4.99-0.7,7.11,0.07
		c24.08,8.68,48.07,17.63,72.15,26.29c2.11,0.76,4.99,0.63,7.12-0.14c24.08-8.68,48.07-17.61,72.14-26.32
		c1.87-0.68,4.39-0.84,6.22-0.18c22.51,8.13,44.95,16.46,67.41,24.73c6.33,2.33,12.69,4.6,19.59,7.1c0-2.11,0.17-3.41-0.02-4.65
		c-3.43-22.37-6.97-44.73-10.37-67.11c-5.78-38.01-11.44-76.05-17.32-114.05c-0.27-1.75-1.92-3.93-3.51-4.72
		c-8.35-4.11-16.88-7.85-25.36-11.69c-2.39-1.08-4.28-1.23-5.56,1.88c-1.32,3.21-3.14,6.24-5.01,9.18
		c-1.71,2.68-1.02,4.15,1.72,5.35c5.18,2.27,10.15,5.08,15.46,6.93c4.51,1.57,6.09,4.53,6.71,8.82c1.9,13.18,3.94,26.34,5.93,39.51
		c4.27,28.14,8.57,56.28,12.81,84.42c0.87,5.78,1.56,11.58,2.41,17.95c-2.35-0.51-3.68-0.65-4.9-1.09
		c-19.19-7.05-38.33-14.26-57.6-21.08c-2.87-1.01-6.69-1.18-9.51-0.18c-23.96,8.51-47.78,17.42-71.71,26.05
		c-1.8,0.65-4.26,0.56-6.09-0.1c-23.92-8.64-47.75-17.52-71.69-26.11c-2.46-0.88-5.75-1.06-8.16-0.2
		c-17.7,6.29-35.26,12.95-52.89,19.43c-3.27,1.2-6.65,2.09-10.87,3.41c2.6-17.59,4.95-33.87,7.43-50.12
		c4.77-31.26,9.68-62.51,14.34-93.78c0.49-3.29,1.88-4.93,4.76-6.19c16.13-7.09,32.15-14.45,48.36-21.35
		c2.39-1.02,5.94-0.98,8.35,0.02c19.52,8.03,38.9,16.43,58.35,24.65c1.79,0.76,4.09,1.83,5.66,1.3c5.44-1.86,10.65-4.36,16.23-6.74
		c-3.03-4.77-5.4-8.98-8.31-12.79c-0.86-1.13-3.23-1.33-4.96-1.51c-2.63-0.29-5.61,0.57-7.9-0.38c-20.13-8.3-40.12-16.93-60.23-25.3
		c-1.95-0.81-4.75-1.28-6.53-0.5c-22.36,9.85-44.63,19.92-66.84,30.1c-1.54,0.71-3.27,2.56-3.58,4.15
		c-1.49,7.5-2.57,15.09-3.7,22.67c-3.41,22.89-6.71,45.79-10.18,68.66c-4.07,26.83-8.27,53.63-12.38,80.45
		C5.53,295.11,5.02,299.67,4.31,305.09z M281.16,60.56c-0.8-4.07-1.62-11.57-3.78-18.67c-5.27-17.35-16.76-29.02-34.46-33.49
		c-18.77-4.73-35.88-0.37-48.54,14.31c-16.02,18.57-18.91,40.35-9.95,63.09c8.94,22.7,25.52,39.85,43.06,56.12
		c2.51,2.33,4.33,1.3,6.43-0.52c12.61-10.96,24.23-22.82,33.34-36.93C275.24,92.13,280.77,78.93,281.16,60.56z M106.67,122.24
		c-0.42,1.27-0.77,1.87-0.81,2.5c-1.3,21.27-2.64,42.53-3.67,63.81c-0.08,1.63,1.81,4.27,3.41,4.91
		c18.81,7.54,37.72,14.8,56.64,22.07c1.12,0.43,2.44,0.34,3.74,0.5c0.24-1.13,0.49-1.77,0.49-2.41c0.03-21.48,0.13-42.96-0.1-64.43
		c-0.02-1.7-1.95-4.23-3.61-4.93c-10.69-4.55-21.54-8.73-32.37-12.96C122.56,128.24,114.68,125.3,106.67,122.24z M244.94,181.09
		c-2.19,0.55-3.69,0.75-5.06,1.3c-18.65,7.53-37.27,15.13-55.93,22.64c-3.18,1.28-4.45,3.16-4.38,6.74
		c0.29,15.66,0.27,31.32,0.4,46.99c0.01,1.56,0.32,3.12,0.54,5.16c2.09-0.49,3.57-0.64,4.9-1.18c19.87-8.06,39.7-16.2,59.57-24.24
		c3.14-1.27,4.08-3.23,3.77-6.58c-0.78-8.46-1.15-16.95-1.78-25.42C246.37,198.22,245.66,189.96,244.94,181.09z M165.21,261.64
		c0.56-0.82,1.06-1.22,1.06-1.62c0.11-8.32,0.3-16.65,0.06-24.97c-0.04-1.31-1.81-3.2-3.2-3.75c-19.5-7.65-39.07-15.09-58.61-22.62
		c-3.5-1.35-5.37-0.58-5.51,3.47c-0.27,7.49-0.9,14.98-0.9,22.47c0,1.52,1.81,3.78,3.33,4.43c5.65,2.41,11.51,4.32,17.31,6.35
		C134.11,250.79,149.47,256.14,165.21,261.64z M91.59,127.32c-1.54,0-2.43-0.23-3.13,0.04c-8.2,3.17-16.45,6.25-24.49,9.8
		c-1.52,0.67-2.83,3.21-3.11,5.06c-1.96,12.98-3.66,26-5.38,39.01c-0.77,5.86-1.4,11.74-2.18,18.39c2.97-0.42,5.23-0.59,7.43-1.09
		c7.12-1.61,14.18-3.57,21.35-4.94c3.53-0.67,4.61-2.43,4.86-5.69c1.13-14.42,2.46-28.82,3.63-43.24
		C91.02,139.05,91.24,133.44,91.59,127.32z M301.69,254.15c-2.99-18.45-5.65-35.5-8.66-52.49c-0.3-1.69-2.44-3.47-4.16-4.42
		c-7.71-4.26-15.56-8.25-23.38-12.3c-1.4-0.72-2.89-1.26-5.26-2.28c0,2.48-0.08,4.06,0.01,5.64c0.89,14.29,2.16,28.57,2.58,42.87
		c0.23,7.97,2.49,12.67,11.08,14.42C282.92,247.43,291.59,250.96,301.69,254.15z M179.67,191.41c1.83-0.23,2.86-0.17,3.75-0.49
		c18.86-6.92,37.7-13.86,56.52-20.88c1.3-0.49,3.25-1.59,3.34-2.54c0.37-4.14,0.16-8.34,0.16-13.78c-3.85,3.25-6.64,5.34-9.09,7.77
		c-2.58,2.55-4.68,2.37-7.24-0.02c-7.41-6.93-14.86-13.81-22.51-20.47c-1.49-1.3-4.24-2.5-5.89-2.01
		c-5.38,1.61-10.59,3.88-15.71,6.24c-1.39,0.64-3.16,2.45-3.18,3.74C179.58,162.9,179.67,176.84,179.67,191.41z M85.43,208.01
		c-0.69-0.2-1.03-0.43-1.31-0.37c-10.03,2.23-20.09,4.36-30.04,6.91c-1.35,0.35-2.84,2.7-3.11,4.31
		c-1.42,8.34-2.47,16.74-3.62,25.12c-0.42,3.02-0.76,6.05-1.14,9.09c1.12,0.18,1.66,0.44,2.07,0.31
		c10.73-3.42,21.5-6.75,32.13-10.46c1.5-0.52,3.15-2.87,3.33-4.53c0.98-9.07,1.56-18.2,2.19-27.31
		C86.01,210.03,85.59,208.93,85.43,208.01z M292.07,184.73c0-2.61,0.13-3.91-0.02-5.18c-1.16-9.9-2.82-19.76-3.44-29.69
		c-0.52-8.42-3.33-14.11-12.28-15.62c-2.07-0.35-4.08-1.43-5.97-2.44c-3.69-1.97-6.11-1.09-8.96,2.11
		c-3.62,4.04-5.28,8.05-4.39,13.45c0.81,4.91,0.89,9.93,1.49,14.88c0.17,1.37,0.67,3.29,1.66,3.89
		C270.35,172.23,280.68,178.14,292.07,184.73z" />
                            <path class="st1" d="M4.31,305.09c0.71-5.42,1.22-9.98,1.91-14.51c4.11-26.82,8.32-53.62,12.38-80.45
		c3.47-22.88,6.77-45.78,10.18-68.66c1.13-7.57,2.21-15.16,3.7-22.67c0.31-1.59,2.04-3.44,3.58-4.15
		c22.22-10.18,44.48-20.25,66.84-30.1c1.78-0.78,4.58-0.31,6.53,0.5c20.11,8.36,40.1,17,60.23,25.3c2.29,0.94,5.27,0.09,7.9,0.38
		c1.73,0.19,4.1,0.39,4.96,1.51c2.92,3.8,5.29,8.02,8.31,12.79c-5.58,2.38-10.8,4.88-16.23,6.74c-1.57,0.54-3.87-0.54-5.66-1.3
		c-19.45-8.21-38.82-16.61-58.35-24.65c-2.42-0.99-5.97-1.03-8.35-0.02c-16.21,6.91-32.22,14.27-48.36,21.35
		c-2.88,1.26-4.26,2.9-4.76,6.19c-4.66,31.28-9.57,62.52-14.34,93.78c-2.48,16.25-4.82,32.53-7.43,50.12
		c4.22-1.31,7.6-2.2,10.87-3.41c17.63-6.48,35.19-13.14,52.89-19.43c2.42-0.86,5.7-0.68,8.16,0.2
		c23.94,8.59,47.77,17.47,71.69,26.11c1.82,0.66,4.28,0.75,6.09,0.1c23.92-8.63,47.74-17.54,71.71-26.05c2.82-1,6.64-0.83,9.51,0.18
		c19.27,6.82,38.41,14.03,57.6,21.08c1.21,0.45,2.54,0.58,4.9,1.09c-0.85-6.37-1.54-12.18-2.41-17.95
		c-4.24-28.14-8.54-56.28-12.81-84.42c-2-13.17-4.04-26.33-5.93-39.51c-0.62-4.28-2.2-7.25-6.71-8.82
		c-5.31-1.85-10.29-4.66-15.46-6.93c-2.74-1.2-3.42-2.67-1.72-5.35c1.87-2.94,3.69-5.97,5.01-9.18c1.28-3.11,3.16-2.96,5.56-1.88
		c8.48,3.84,17.01,7.58,25.36,11.69c1.59,0.79,3.24,2.97,3.51,4.72c5.89,38,11.55,76.03,17.32,114.05
		c3.4,22.38,6.93,44.74,10.37,67.11c0.19,1.24,0.02,2.54,0.02,4.65c-6.9-2.5-13.26-4.77-19.59-7.1
		c-22.46-8.26-44.9-16.6-67.41-24.73c-1.83-0.66-4.35-0.5-6.22,0.18c-24.07,8.71-48.06,17.64-72.14,26.32
		c-2.14,0.77-5.02,0.9-7.12,0.14c-24.09-8.66-48.07-17.62-72.15-26.29c-2.13-0.77-5-0.83-7.11-0.07
		c-27.36,9.87-54.65,19.96-81.96,29.97C7.85,304.2,6.47,304.49,4.31,305.09z" />
                            <path class="st2" d="M281.16,60.56c-0.39,18.38-5.92,31.58-13.9,43.92c-9.12,14.1-20.73,25.97-33.34,36.93
		c-2.09,1.82-3.92,2.85-6.43,0.52c-17.54-16.28-34.12-33.42-43.06-56.12c-8.96-22.73-6.07-44.52,9.95-63.09
		C207.04,8.03,224.15,3.67,242.92,8.4c17.7,4.46,29.19,16.13,34.46,33.49C279.54,48.99,280.36,56.49,281.16,60.56z M230.5,77.94
		c11.92-0.06,21.76-10.16,21.58-22.15c-0.18-11.94-9.77-21.4-21.7-21.41c-12.11-0.01-22.06,9.87-21.91,21.77
		C208.63,68.19,218.54,77.99,230.5,77.94z" />
                            <path class="st3" d="M106.67,122.24c8.01,3.06,15.89,6,23.72,9.06c10.83,4.23,21.68,8.42,32.37,12.96c1.66,0.7,3.59,3.23,3.61,4.93
		c0.23,21.48,0.14,42.96,0.1,64.43c0,0.64-0.25,1.28-0.49,2.41c-1.3-0.16-2.62-0.07-3.74-0.5c-18.91-7.27-37.83-14.53-56.64-22.07
		c-1.59-0.64-3.48-3.29-3.41-4.91c1.02-21.28,2.37-42.55,3.67-63.81C105.9,124.12,106.25,123.51,106.67,122.24z" />
                            <path class="st3" d="M244.94,181.09c0.72,8.87,1.44,17.13,2.05,25.4c0.62,8.47,0.99,16.97,1.78,25.42
		c0.31,3.35-0.63,5.31-3.77,6.58c-19.87,8.04-39.71,16.18-59.57,24.24c-1.33,0.54-2.81,0.69-4.9,1.18c-0.22-2.04-0.53-3.6-0.54-5.16
		c-0.13-15.66-0.11-31.33-0.4-46.99c-0.07-3.58,1.2-5.46,4.38-6.74c18.66-7.5,37.28-15.11,55.93-22.64
		C241.24,181.84,242.75,181.64,244.94,181.09z" />
                            <path class="st3" d="M165.21,261.64c-15.74-5.5-31.1-10.85-46.46-16.24c-5.8-2.04-11.67-3.95-17.31-6.35
		c-1.52-0.65-3.33-2.91-3.33-4.43c0-7.49,0.63-14.98,0.9-22.47c0.15-4.05,2.01-4.82,5.51-3.47c19.54,7.53,39.12,14.98,58.61,22.62
		c1.39,0.55,3.16,2.44,3.2,3.75c0.23,8.32,0.04,16.65-0.06,24.97C166.27,260.42,165.77,260.82,165.21,261.64z" />
                            <path class="st3" d="M91.59,127.32c-0.36,6.12-0.58,11.73-1.03,17.33c-1.17,14.42-2.5,28.82-3.63,43.24
		c-0.26,3.26-1.33,5.02-4.86,5.69c-7.17,1.37-14.22,3.33-21.35,4.94c-2.19,0.5-4.46,0.67-7.43,1.09c0.78-6.65,1.41-12.53,2.18-18.39
		c1.72-13.02,3.42-26.04,5.38-39.01c0.28-1.85,1.59-4.39,3.11-5.06c8.04-3.55,16.29-6.63,24.49-9.8
		C89.16,127.08,90.05,127.32,91.59,127.32z" />
                            <path class="st3" d="M301.69,254.15c-10.1-3.19-18.77-6.72-27.78-8.56c-8.59-1.75-10.85-6.45-11.08-14.42
		c-0.42-14.3-1.69-28.58-2.58-42.87c-0.1-1.57-0.01-3.16-0.01-5.64c2.36,1.02,3.86,1.56,5.26,2.28c7.82,4.05,15.68,8.04,23.38,12.3
		c1.72,0.95,3.86,2.73,4.16,4.42C296.04,218.65,298.7,235.7,301.69,254.15z" />
                            <path class="st4" d="M179.67,191.41c0-14.56-0.09-28.51,0.14-42.44c0.02-1.3,1.79-3.11,3.18-3.74c5.12-2.35,10.33-4.62,15.71-6.24
		c1.65-0.49,4.4,0.71,5.89,2.01c7.65,6.66,15.1,13.54,22.51,20.47c2.56,2.39,4.66,2.57,7.24,0.02c2.45-2.43,5.24-4.51,9.09-7.77
		c0,5.44,0.21,9.64-0.16,13.78c-0.09,0.96-2.04,2.06-3.34,2.54c-18.82,7.02-37.66,13.96-56.52,20.88
		C182.53,191.24,181.5,191.18,179.67,191.41z" />
                            <path class="st3" d="M85.43,208.01c0.16,0.92,0.57,2.02,0.5,3.08c-0.64,9.11-1.21,18.23-2.19,27.31c-0.18,1.66-1.83,4-3.33,4.53
		c-10.63,3.72-21.39,7.05-32.13,10.46c-0.42,0.13-0.96-0.13-2.07-0.31c0.38-3.04,0.73-6.07,1.14-9.09
		c1.15-8.38,2.21-16.78,3.62-25.12c0.27-1.62,1.76-3.97,3.11-4.31c9.95-2.55,20.01-4.68,30.04-6.91
		C84.4,207.58,84.75,207.81,85.43,208.01z" />
                            <path class="st3" d="M292.07,184.73c-11.38-6.59-21.72-12.49-31.92-18.62c-0.99-0.59-1.49-2.52-1.66-3.89
		c-0.6-4.95-0.69-9.97-1.49-14.88c-0.89-5.39,0.78-9.4,4.39-13.45c2.86-3.19,5.27-4.07,8.96-2.11c1.89,1.01,3.9,2.09,5.97,2.44
		c8.94,1.51,11.75,7.21,12.28,15.62c0.62,9.93,2.28,19.8,3.44,29.69C292.19,180.82,292.07,182.12,292.07,184.73z" />
                            <path class="st0" d="M230.5,77.94c-11.96,0.06-21.87-9.75-22.02-21.79c-0.15-11.89,9.8-21.77,21.91-21.77
		c11.93,0.01,21.51,9.47,21.7,21.41C252.27,67.78,242.43,77.88,230.5,77.94z" />
                        </g>
                    </svg>
                </div>
                <div class='text-white text-2xl ml-5'>MAP LOCATOR</div>
            </div>
            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                            </p>
                        </div>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                        </svg>
                    </a>

                    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>
                            <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                </svg>
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                            <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-start">
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px me-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ms-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-end sm:ms-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>