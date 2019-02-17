<html>
<head>
    <title>App Name</title>
</head>
<body>


    <div class="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">

            @foreach($serve as $count => $serves)

                <li role="presentation" @if($count == 0) class="active" @endif>
                    <a href="#tab-{{ $serves->id }}" aria-controls="#tab-{{ $serves->id }}" role="tab" data-toggle="tab">{{ $serves->service }}</a
                </li>

            @endforeach

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            @foreach($serve as $count => $serves)

                <div role="tabpanel" @if($count == 0) class="tab-pane active" @else class="tab-pane" @endif id="tab-{{ $serves->id }}">

                    <h2>{{ $serves->service }}</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim obcaecati praesentium repellat. Est explicabo facilis fuga illum iusto, obcaecati saepe voluptates! Dolores eaque porro quaerat sunt totam ut, voluptas.</p>

                </div>

            @endforeach

        </div>

    </div>

</body>
</html>
