<<<<<<< HEAD
<?php

class TicketService {

    public static function getTickets($pdo) {
        $sql = "SELECT * FROM tickets";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function addTicket($pdo, $post) {
        $sql = "INSERT INTO tickets (client, sujet, priorite, statut, due) 
                VALUES (:client, :sujet, :priorite, :statut, :due)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":client"   => $post["client"],
            ":sujet"    => $post["subject"],
            ":priorite" => strtolower($post["priority"]),
            ":statut"   => $post["status"],
            ":due"      => $post["due"] ?? null,
        ]);
    }

    public static function getPrioClass($priorite) {
        return match($priorite) {
            "haute"   => "prio-high",
            "moyenne" => "prio-med",
            "basse"   => "prio-low",
            default   => ""
        };
    }

    public static function getStatutClass($statut) {
        return match($statut) {
            "fermé"   => "closed",
            default   => "open"
        };
    }
}
=======
<?php

class TicketService {

    public static function getTickets($pdo) {
        $sql = "SELECT * FROM tickets";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function addTicket($pdo, $post) {
        $sql = "INSERT INTO tickets (client, sujet, priorite, statut, due) 
                VALUES (:client, :sujet, :priorite, :statut, :due)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":client"   => $post["client"],
            ":sujet"    => $post["subject"],
            ":priorite" => strtolower($post["priority"]),
            ":statut"   => $post["status"],
            ":due"      => $post["due"] ?? null,
        ]);
    }

    public static function getPrioClass($priorite) {
        return match($priorite) {
            "haute"   => "prio-high",
            "moyenne" => "prio-med",
            "basse"   => "prio-low",
            default   => ""
        };
    }

    public static function getStatutClass($statut) {
        return match($statut) {
            "fermé"   => "closed",
            default   => "open"
        };
    }
}
>>>>>>> d71a0ab5ba2a82b324c81ebd20d6a93b09d554ce
?>