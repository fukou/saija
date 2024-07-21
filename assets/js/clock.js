const updateClock = () => {
    const clockDiv = document.querySelector('[class*="is-style-saija-clock"]');
    const now = new Date();
    const options = {
        timeZone: "Asia/Jakarta",
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit",
        hour12: false,
    };
    const timeParts = new Intl.DateTimeFormat("en-GB", options).formatToParts(
        now,
    );

    let hours, minutes, seconds;

    timeParts.forEach((part) => {
        if (part.type === "hour") hours = part.value;
        if (part.type === "minute") minutes = part.value;
        if (part.type === "second") seconds = part.value;
    });

    clockDiv.innerHTML = `${hours}<span class="is-style-saija-clock-blink">:</span>${minutes}`;
};

setInterval(updateClock, 1000);
updateClock(); // Initial call to set the clock immediately
