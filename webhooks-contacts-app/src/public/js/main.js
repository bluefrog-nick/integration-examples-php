function reloadPage() {
    document.location.reload();
}

function requestNotShownEventsCount() {
    return new Promise((resolve) => {
        $.getJSON("/ajax/events.php", data => {
            const { notShownEventsCount } = data;
            resolve(notShownEventsCount);
        });
    });
}

async function displayNotShownEventsAlertIfNeed() {
    const notShownEventsCount = await requestNotShownEventsCount();
    if (notShownEventsCount > 0) {
        $('.alert-not-shown-events').show();
    }
}

$(document).ready(async () => {
    setInterval(displayNotShownEventsAlertIfNeed, 3000);
    $('.alert-not-shown-events').click(() => {
       reloadPage();
       return false;
    });
});