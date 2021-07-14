jQuery(() => {
  jQuery(".player").YTPlayer({
    videoURL: "https://www.youtube.com/watch?v=Vx4Se01KDA4",
    containment: "#banner__video",
    showControls: false,
    ratio: "16/9",
    quality: "default",
    autoPlay: true,
    mute: true,
    startAt: 0,
    realfullscreen: true,
    loop: true,
  });
});
