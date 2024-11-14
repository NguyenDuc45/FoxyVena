<?php
function getAllThanhtoan() {
    try {
        $sql = "SELECT * FROM thanhtoan";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneThanhtoan($id_thanhtoan) {
    try {
        $sql = "SELECT * FROM thanhtoan WHERE id_thanhtoan='$id_thanhtoan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function addThanhtoan($ten_thanhtoan) {
    try {
        $sql = "INSERT INTO thanhtoan(ten_thanhtoan) VALUES ('$ten_thanhtoan')";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function updateThanhtoan($id_thanhtoan, $ten_thanhtoan) {
    try {
        $sql = "UPDATE thanhtoan SET ten_thanhtoan='$ten_thanhtoan' WHERE id_thanhtoan='$id_thanhtoan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}

function deleteThanhtoan($id_thanhtoan) {
    try {
        $sql = "DELETE FROM thanhtoan WHERE id_thanhtoan='$id_thanhtoan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
    } catch (\Exception $e) {
        debug($e);
    }
}