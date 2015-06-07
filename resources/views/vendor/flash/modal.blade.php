<div id="flash-overlay-modal" class="reveal-modal {{ $modalClass or '' }}" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <h2 id="modalTitle">{{ $title }}</h2>
    <p>{{ $body }}</p>
    <p>
        <a href="#" class="secondary button" data-dismiss="modal">Close</a>
    </p>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
