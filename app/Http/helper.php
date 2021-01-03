<?php



function success($route, $message) {
    return redirect()->route($route)->with(['success' => $message]);
}


function error($route, $message) {
    return redirect()->route($route)->with(['error' => $message]);
}
