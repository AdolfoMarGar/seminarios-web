
@extends("layouts.mainlayout")

@section("title", "Inserción de seminarios")

@section("header", "Inserción de seminarios")

@section("content")
    @isset($myrequest)
        <form action="{{ route('request.update', ['request' => $myrequest->id]) }}" method="POST" enctype="multipart/form-data">
        @method("PUT")
    @else
        <form action="{{ route('request.store') }}" method="POST" enctype="multipart/form-data">
    @endisset
        @csrf
        Text:<input type="text" name="text" value="{{$myrequest->text ?? '' }}"><br>
        Type:
        <select name="type">
            @isset($myrequest)
                <option  
                    @if($myrequest->type==1)
                            selected 
                    @endif 
                value="1">pdf</option>
                <option  
                    @if($myrequest->type==2)
                            selected 
                    @endif 
                value="2">ppt</option>
                <option  
                    @if($myrequest->type==3)
                            selected 
                    @endif 
                value="3">photo</option>

            @else        
                <option value="1">pdf</option>
                <option value="2">ppt</option>
                <option value="3">photo</option>

            @endisset
        </select>
    </br>
        Seminar:
        <select name="seminar_id">
            @foreach($seminarList as $s)
                <option  
                @isset($myrequest)
                    @if ($myrequest->seminar_id==$s->id)
                        selected 
                    @endif 
                @endisset
                
                 value="{{$s->id}}">{{$s->year}}, {{$s->location}}</option>
            @endforeach
        </select>
    </br>
    Presentation:
    <select name="presentation_id">
        <option  value="-1">Ninguna</option>
        @foreach($presentationList as $p)
            <option  
            @isset($myrequest)
                @if ($myrequest->document->presentation_id==$p->id)
                    selected 
                @endif 
            @endisset
            
             value="{{$p->id}}">{{$p->subject}}</option>
        @endforeach
    </select>
</br>
User:<select name="user_id">
            @foreach($userList as $s)
                <option  
                @isset($myrequest)
                    @if ($myrequest->user_id==$s->id)
                        selected 
                    @endif 
                @endisset
                
                 value="{{$s->id}}">{{$s->username}}</option>
            @endforeach
        </select></br>
        <input type="file" name="file" id="chooseFile">
        <label for="chooseFile">Select file</label>
    </br>
        <input type="submit">
        </form>
@endsection