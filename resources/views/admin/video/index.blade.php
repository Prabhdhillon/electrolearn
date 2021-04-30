@extends('layout.admin')

@section('content')
    <div class="container">
        <h2> {{ $course->title }}</h2>
        <div class="font-w600" style="font-size:24px;">Videos:</div>
        @forelse ($videos as $video)
            <div class="block block-rounded block-bordered mt-4">
                <div class="block-content">
                    <table class="table table-striped table-borderless table-vcenter">
                        <tbody>
                            <tr>
                                <td class="text-center w-25 d-none d-md-table-cell">
                                    <a class="item item-circle bg-primary text-white font-size-h2 mx-auto"
                                        href="javascript:void(0)">
                                        {{ $loop->index + 1 }}
                                    </a>
                                </td>
                                <td>
                                    <div class="py-4">

                                        <a class="link-fx h4 mb-2 d-inline-block text-dark" href="javascript:void(0)">
                                            {{ $video->title }}
                                        </a>
                                        <p class="text-muted mb-0">
                                            Ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt
                                            tincidunt
                                            turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper,
                                            odio
                                            sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec
                                            lectus.
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @empty

        @endforelse



    </div>

@endsection
