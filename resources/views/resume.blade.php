<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @if ($resume->id == 1)
            Mohit Jain
        @else
            {{ auth()->user()->name }}
        @endif
    </title>
    <style>
        hr {
            border: 0.3px solid black;
            margin-bottom: 0px;
            margin-top: 2px;

        }

        body {
            font-family: Arial
        }

        .username {
            margin-top: 0pt;
            margin-bottom: 0pt;
            text-align: center;
            line-height: normal;
            widows: 0;
            orphans: 0;
            font-size: 24.5pt;
        }

        .heading-title {
            margin-top: 3.1pt;
            margin-left: 0.6pt;
            margin-bottom: 0pt;
            line-height: normal;
            widows: 0;
            orphans: 0;
            font-size: 15pt;
        }

        .company-title {
            margin-top: 3.75pt;
            margin-left: 0.9pt;
            margin-bottom: 0pt;
            text-indent: -0.9pt;
            line-height: 133%;
            widows: 0;
            orphans: 0;
            font-size: 11.5pt;

        }

        .float-left {
            float: left;
        }

        .float-right {
            float: right;
        }

        .float-clear {
            clear: both;
        }

        li {

            line-height: 145%;
            widows: 0;
            orphans: 0;
            font-size: 11pt;


        }

        ul {
            margin: 0px;
            padding-left: 25px;
        }

        .description-text {
            margin: 0px;
            padding: 0px;
            line-height: 133%;

            font-size: 11pt;

        }

        .text-md {
            font-size: 11pt;
        }
    </style>
</head>

<body>
    <div>
        <p class="username">
            @if ($resume->id == 1)
                <span style="color:#1c033c;">Mohit Jain</span>
            @else
                <span style="color:#1c033c;">{{ auth()->user()->name }}</span>
            @endif

        </p>
        <p
            style="margin-top:11.75pt; margin-bottom:0pt; text-align:center; line-height:normal; widows:0; orphans:0; font-size:9.5pt;">
            @if ($resume->id == 1)
                <span style="color:#371e77;"> xyz@example.com </span>
                |
                <span style="color:#371e77;"> 12345678 </span>
            @else
                <span style="color:#371e77;">{{ auth()->user()->email }} </span>
                |
                <span style="color:#371e77;"> {{ auth()->user()->number }} </span>
            @endif
        </p>
        <p style="margin-top:0.3pt; margin-bottom:0pt; text-align:center; line-height:normal; widows:0; orphans:0;">
            <a href="{{ auth()->user()->github }}" style="text-decoration:none;">
                <u>
                    <span
                        style="font-size:9.5pt; color:#1155cc;">{{ str_replace('https://', '', auth()->user()->github) }}</span>
                </u>
            </a>
            |
            <a href="{{ auth()->user()->linkdin }}" style="text-decoration:none;">
                <u><span
                        style="font-size:9.5pt; color:#1155cc;">{{ str_replace('https://www.', '', auth()->user()->linkdin) }}</span></u></a>
        </p>
        <p class="heading-title">
            <span style="color:#110223;">Skills</span>
        </p>
        <div align="center" style="margin-left:0.6pt;">
            <hr size="2" align="center" style="width:100%;">
        </div>
        <p class="description-text">
            <strong><span style="color:#1c033c;">Languages: </span></strong><span
                style="color:#1c033c;">{{ implode(', ',$resume->skills()->where('type', 0)->get()->pluck('name')->toArray()) }}</span>
        </p>
        <p class="description-text">
            <strong><span style="color:#1c033c;">Technologies &amp; Tools: </span></strong>
            <span
                style="color:#1c033c;">{{ implode(', ',$resume->skills()->where('type', '!=', 0)->get()->pluck('name')->toArray()) }}</span>
        </p>
        <br>
        <p class="heading-title">
            <span style="color:#1c033c;">Work Experience</span>
        </p>
        <div align="center" style="margin-left:0.15pt;">
            <hr size="2" align="center" style="width:100%;">
        </div>

        @foreach ($resume->experiences() as $item)
            <div class="company-title">
                <strong>
                    <span style="color:#1c033c;" class="float-left">{{ $item->company_name }}</span>
                </strong>

                <span style="color:#371e77;" class="float-right text-md">{{ $item->duration }}</span>
                <div class="float-clear"></div>
                <span style="color:#4b28a4;font-weight: bold;" class="text-md"><i>{{ $item->job_title }}</i></span>
            </div>
            <div class="float-clear"></div>

            <div style="margin-bottom:5px">
                {!! $item->description !!}
            </div>
        @endforeach
        <br>
        <p class="heading-title">
            <span style="color:#1c033c;">Education</span>
        </p>
        <div align="center" style="margin-left:1.1pt;">
            <hr size="2" align="center" style="width:100%;">
        </div>
        @foreach ($resume->educations() as $item)
            <div class="company-title">

                <strong>
                    <span style="color:#1c033c;" class="float-left">{{ $item->education_name }}</span>
                </strong>

                <span style="color:#371e77;line-break:normal" class="float-right text-md">{{ $item->duration }}</span>



                <div class="float-clear"></div>

                <span style="color:#371e77;" class="float-left text-md">{{ $item->institute_name }}</span>
                <div class="float-clear"></div>
                @if (!is_null($item->description))
                    <span style="color:#1c033c;" class="description-text ">Relevant Coursework:
                        {{ $item->description }}
                    </span>
                @endif
            </div>
        @endforeach
        <br>

        <p class="heading-title">
            <span style="color:#1c033c;">Project Work</span>
        </p>
        <div align="center" style="margin-left:1.1pt;">
            <hr size="2" align="center" style="width:100%;">
        </div>

        <ul>
            @foreach ($resume->projects() as $item)
                <li>

                    <span style="font-weight: bold">{{ $item->title }} ({{ $item->duration }}) :
                    </span>{{ $item->description }}

                </li>
            @endforeach
        </ul>
        @if (!is_null(auth()->user()->certification))
            <br>
            <p class="heading-title"><span style="color:#1c033c;">Awards and Certificates</span></p>
            <div align="center">
                <hr size="2" align="center" style="width:100%;">
            </div>

            {!! auth()->user()->certification !!}
        @endif
    </div>

</body>

</html>
