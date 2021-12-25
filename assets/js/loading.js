var neededFiles;
var downloadedFiles = 0;

var loadingPercent = document.getElementById("percent");
var loadingStatus = document.getElementById("status");

var blurinit = false;
function GameDetails(
  servername,
  serverurl,
  mapname,
  maxplayers,
  steamid,
  gamemode
) {
  document.getElementById("mapname").innerHTML = mapname;
  document.getElementById("gamemode").innerHTML = gamemode;
}

function DownloadingFile(fileName) {
  downloadedFiles++;
  refreshProgress();

  setStatus("Downloading files...");
}

function SetStatusChanged(status) {
  if (status.indexOf("Getting Addon #") != -1) {
    downloadedFiles++;
    refreshProgress();
  } else if (status == "Sending client info...") {
    setProgress(100);
  } else if (status == "Starting Lua...") {
    setProgress(90);
  } else if (status == "Workshop Complete") {
    setProgress(85);
  } else if (status == "No files to request!") {
    setProgress(85);
  }

  setStatus(status);
}

function setStatus(text) {
  loadingStatus.innerHTML = text;
}

function SetFilesNeeded(needed) {
  neededFiles = needed + 1;
}

function refreshProgress() {
  progress = Math.floor((downloadedFiles / neededFiles) * 80);

  setProgress(progress);
}

function setProgress(progress) {
  loadingPercent.innerHTML = progress + "%";
}
