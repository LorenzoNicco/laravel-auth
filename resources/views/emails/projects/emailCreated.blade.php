<div>
    <h1>Nuovo progetto pubblicato</h1>

    <ul>
        <li>
            Titolo: {{ $project->title }}
        </li>
        <li>
            Contenuto: {!! nl2br ($project->description) !!}
        </li>
    </ul>
</div>