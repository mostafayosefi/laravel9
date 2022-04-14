
                                        @if (count($errors))
                                        <div class="text-right" >
                                            <span  style="color: red; ">    خطای ثبت اطلاعات
                                            </span>
                                                <hr>
                                            <ul>
                                                @foreach ($errors->all() as $error)<br>
                                                    <li><span  style="color: red; ">{{ $error }}</span></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif



