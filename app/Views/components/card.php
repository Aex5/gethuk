<?php
function render_card($card_title, $card_text, $btn_text, $btn_url = "#") {
    echo '
    <div class="card mb-3" style="width: 100%;">
        <div class="card-body">
            <h5 class="card-title">' . htmlspecialchars($card_title) . '</h5>
            <p class="card-text">' . htmlspecialchars($card_text) . '</p>
            <a href="' . htmlspecialchars($btn_url) . '" class="btn btn-primary">' . htmlspecialchars($btn_text) . '</a>
        </div>
    </div>';
}
?>

