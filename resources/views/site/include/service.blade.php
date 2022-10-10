<section class="widget widget_stay_connected">
    <h3 class="widget-title">خدماتنا</h3>
    <ul class="stay-connected-list">
        <li>
            <a href="{{route('site.service',@$service[0]->id)}}">

                {{@$service[0]->name}}
            </a>
        </li>
        <li>
            <a href="{{route('site.service',@$service[1]->id)}}" class="twitter">
                {{@$service[1]->name}}
            </a>
        </li>
        <li>
            <a href="{{route('site.service',@$service[2]->id)}}" class="linkedin">
                {{@$service[2]->name}}
            </a>
        </li>
        <li>
            <a href="{{route('site.service',@$service[3]->id)}}" class="youtube">
                {{@$service[3]->name}}
            </a>
        </li>
        <li>
            <a href="{{route('site.service',@$service[4]->id)}}" class="instagram">
                {{@$service[4]->name}}
            </a>
        </li>
        <li>
            <a href="{{route('site.service',@$service[5]->id)}}" class="wifi">
                {{@$service[5]->name}}
            </a>
        </li>
    </ul>
</section>
