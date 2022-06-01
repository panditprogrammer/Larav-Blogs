@extends('blog.layouts.main')
{{-- this is main body parser container --}}



@push('title')
    <title>Home : {{ @config('constants.site_name') }} </title>
@endpush


@section('body-content')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('/blog-assets/assets/img/home-bg.jpg')">
        <div class="container position-relative px-4">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="site-heading">
                        <h1>{{ @config('constants.site_name') }}</h1>
                        <span class="subheading">A PHP Laravel Blog by Pandit Programmer. </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Container fluid-->
    <div class="container">


        <!-- side bar -->
        <div class="row">

            <div class="col-md-3 bg-light">
                <ul class="navbar-nav ms-auto py-4 py-lg-0" style="list-style: none">

                    @foreach ($allPosts as $post)
                        <li class="list-item">
                            <a href="{{ url("/post/{$post->slug}") }}">
                                <strong>
                                    {{ $post->title }}
                                </strong>
                            </a>
                        </li>
                        <!-- Divider-->
                        <hr class="my-2" />
                    @endforeach

                </ul>
            </div>

            {{-- main post section --}}
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h1>This is PHP laravel 8 based Blogs website with Admin-Panel.</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. At, esse id cupiditate debitis sunt
                            repellat, nihil eaque eveniet blanditiis quaerat aliquam, sint ad aperiam iusto deserunt
                            obcaecati praesentium magnam odit nulla dignissimos minus voluptatibus commodi! Voluptatibus,
                            eius odio necessitatibus aliquid est molestias tempore non quis minus quo accusantium eos eum
                            qui suscipit reiciendis dolor doloribus aut corporis mollitia. Labore eum quos, corrupti
                            provident itaque non sequi, dolor libero error fugit obcaecati esse qui expedita ad explicabo
                            nemo. Quisquam nostrum sint est voluptatum velit nam facere, dolores, laborum eaque ab molestias
                            perspiciatis magni molestiae quis ex sequi provident explicabo doloribus, blanditiis
                            reprehenderit sed id. Eos aspernatur ducimus excepturi cum dolores repellat veniam facere
                            soluta, aperiam iusto quos architecto accusamus voluptates facilis magnam optio ad numquam quae
                            eligendi nostrum consequuntur nemo odio. Nesciunt eaque veritatis maiores quisquam dolorem
                            voluptas, ut magnam hic, voluptatem quod neque nisi laboriosam eligendi commodi dolores sunt
                            corporis nobis odit iure impedit doloremque, aspernatur molestiae atque autem. Perferendis
                            laboriosam quos neque eum alias. Maxime odit at, maiores ipsam, assumenda eius expedita alias
                            quaerat quisquam nulla facilis amet optio nobis facere, consectetur nesciunt odio? A deserunt
                            dicta magnam laboriosam accusamus similique modi dignissimos eum ea numquam odio, provident vero
                            porro odit laborum at? Voluptas animi praesentium assumenda error doloribus nisi perspiciatis
                            architecto blanditiis, molestiae eos autem pariatur magni ipsum recusandae iusto et eveniet amet
                            sapiente quidem! Voluptatem, repellat pariatur expedita error quae, itaque architecto sunt quam
                            dolorem totam placeat cumque sed delectus illo a? Atque doloribus quam non, tempore aliquid
                            facilis illo dolor? Deserunt cum dolor maiores harum voluptas odit quasi suscipit porro
                            consectetur sunt distinctio ratione obcaecati id, esse consequatur aut eligendi perspiciatis
                            laborum exercitationem minima alias? Atque sapiente ipsa delectus labore voluptatem quos
                            laudantium, ipsam cupiditate esse rerum, voluptatum soluta nam. Vel maxime itaque nesciunt nemo.
                            Maxime ratione odit obcaecati vitae possimus animi illo aspernatur laborum illum ipsa sunt
                            incidunt inventore hic voluptate nihil pariatur cupiditate maiores corporis, esse ipsum sequi
                            porro. Natus, cumque molestiae. Praesentium non iure architecto necessitatibus pariatur
                            cupiditate rem dolor fuga animi, laudantium rerum sit ad voluptas sequi sint error quod odit?
                            Nam recusandae voluptatum voluptatibus culpa quam corrupti, eveniet, eligendi autem maiores
                            rerum suscipit temporibus sit possimus eum incidunt praesentium a velit error aliquid ipsa.
                            Officia, accusantium eveniet dignissimos minus aspernatur, facere id nihil dolorem perferendis
                            eum odit magnam perspiciatis facilis sequi aliquam aut ipsa iusto velit incidunt distinctio
                            totam sit? Cum laborum vel quae ratione culpa velit, impedit quibusdam deleniti veniam omnis
                            distinctio nemo architecto, ex alias doloremque provident tempore maiores exercitationem, ea
                            numquam ducimus deserunt tenetur. Mollitia blanditiis voluptatem, odio pariatur tempora libero
                            enim doloremque quidem, error necessitatibus ipsa molestiae hic natus consequatur amet aut eos
                            harum molestias repellat iure esse. Exercitationem non id deleniti velit culpa, cupiditate fuga
                            mollitia ut odit aliquid omnis ducimus labore harum modi aperiam tempore dolor a blanditiis
                            impedit quam numquam quas soluta quae? Amet, rerum dicta. Officiis, aspernatur architecto magni
                            mollitia odit, repudiandae ut unde praesentium quasi explicabo eligendi illo facere amet.
                            Debitis, suscipit nostrum! Maxime minima dolorum sint assumenda fuga ullam tempora nesciunt
                            iusto dolorem quae adipisci inventore consequatur labore amet nulla alias, sapiente doloremque
                            voluptatem? Iure et necessitatibus culpa illum aliquid qui omnis temporibus cupiditate pariatur
                            repellendus excepturi, ipsam sapiente perspiciatis quam explicabo blanditiis dolorem harum
                            repellat aperiam molestiae eaque vel. Nostrum debitis provident quis! Sequi, eius.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
