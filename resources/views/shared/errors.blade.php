@if($errors->any())
    <div class="alert alert-danger text-right" dir="rtl">
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
