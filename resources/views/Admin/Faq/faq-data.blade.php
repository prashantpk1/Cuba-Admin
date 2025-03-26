<div class="row default-according style-1 faq-accordion" id="accordionoc">
    <div class="col-xl-12">
        @php
            $locale = config('app.locale');
        @endphp
        @foreach ($data as $index => $faq)
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse"
                            data-bs-target="#collapseicon{{ $index }}" aria-expanded="false"
                            aria-controls="collapseicon{{ $index }}">
                            &nbsp;&nbsp; {{ $index + 1 }})
                            <a href="javascript:void(0);" class="edit-data"
                                data-url="{{ route('faq.edit', $faq['id']) }}"> &nbsp;
                                @foreach ($faq['translations_array'] as $translation)
                                    @if ($locale == $translation['locale'])
                                        {!! $translation['question'] ?? 'No Question Available' !!}

                                        @if ($faq->status == 'active')
                                            <span class="badge bg-success me-2">{{ translate('status') }} : {{ translate('active') }}</span>
                                        @else
                                            <span class="badge bg-danger me-2">{{ translate('status') }} : {{ translate('inactive') }}</span>
                                        @endif
                                    @endif
                                @endforeach
                            </a>

                        </button>

                      
                    </h5>
                </div>
                <div class="collapse" id="collapseicon{{ $index }}"
                    aria-labelledby="collapseicon{{ $index }}" data-bs-parent="#accordionoc">
                    <a href="{{ route('faq.destroy', $faq['id']) }}" class="destroy-data" data-url="{{ route('faq.destroy', $faq['id']) }}" style="margin-left:1530px">{{ translate('delete') }}
                    </a>
                    <a href="javascript:void(0);" class="edit-data" data-url="{{ route('faq.edit', $faq['id']) }}">
                        <div class="card-body">
                            @foreach ($faq['translations_array'] as $translation)
                                @if ($locale == $translation['locale'])
                                    {!! $translation['answer'] ?? 'No Answer Available' !!}
                                @endif
                            @endforeach
                        </div>
                    </a>
                  
                </div>
              
            </div>
        @endforeach
    </div>
</div>