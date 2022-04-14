
                    @foreach($textdeses as $key => $textdese)
                    @if($textdese->id==$id)

                    @php echo $textdese->text; @endphp


                    @endif
                    @endforeach
