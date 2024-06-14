<?php

echo Html::a(
    $socialMedia->url(),
    [Html::span('', ['class' => $socialMedia->icon()])],
    [
      "class" => "social-media-link",
      "target" => "_blank",
      "rel" => "noopener noreferrer",
      "aria-label" => $socialMedia->name(),
    ]
);
