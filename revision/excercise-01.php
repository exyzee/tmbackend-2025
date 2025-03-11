<?php
function scanResourceInventory($repository) {
    if (!is_dir($repository)) return [];
    $entries = array_diff(scandir($repository), ['.', '..']);
    return array_filter($entries, fn($e) => pathinfo($e, PATHINFO_EXTENSION) === 'php');
}

function locateResources($term, $repositories) {
    $found = [];
    foreach ($repositories as $repo => $path) {
        $inventory = scanResourceInventory($path);
        $found[$repo] = array_filter($inventory, 
            fn($f) => stripos(pathinfo($f, PATHINFO_FILENAME), $term) !== false
        );
    }
    return $found;
}

$searchTerm = $_GET['search-query'] ?? '';
$activeSection = $_GET['section'] ?? 'overview';

$resourceStore = 'paradigms/';
$taskRepository = 'challenges/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/directory.css">
    <link rel="stylesheet" href="/css/facade.css">
</head>
<body class="resource-hub">
    <header class="hub-header">
        <h1>Codex Navigator</h1>
        
        <nav aria-label="Main navigation">
            <ul class="hub-nav">
                <li><a href="?section=overview" class="<?= $activeSection === 'overview' ? 'active' : '' ?>">Compendium</a></li>
                <li><a href="?section=paradigms" class="<?= $activeSection === 'paradigms' ? 'active' : '' ?>">Code Paradigms</a></li>
                <li><a href="?section=challenges" class="<?= $activeSection === 'challenges' ? 'active' : '' ?>">Developer Trials</a></li>
            </ul>
        </nav>

        <form method="GET" class="hub-search">
            <input type="search" 
                   name="search-query" 
                   aria-label="Search knowledge base"
                   placeholder="Seek patterns..."
                   value="<?= htmlspecialchars($searchTerm, ENT_QUOTES, 'UTF-8') ?>"
                   pattern="[A-Za-z0-9\s\-_]+"
                   title="Alphanumeric characters and hyphens only">
            <button type="submit">🔍 Delve</button>
        </form>
    </header>

    <main class="hub-content">
        <?php if ($activeSection === 'overview'): ?>
            <article class="pdf-viewer">
                <object data="codex.pdf#view=FitH" 
                        type="application/pdf" 
                        width="100%" 
                        height="800"
                        aria-label="Codex PDF Viewer">
                    <p>Access the <a href="codex.pdf">Codex Compendium</a> directly.</p>
                </object>
            </article>

        <?php elseif (in_array($activeSection, ['paradigms', 'challenges'])): ?>
            <section class="resource-listing">
                <h2><?= ucfirst($activeSection) ?> Repository</h2>
                <ul class="file-manifest">
                <?php 
                $repo = $activeSection === 'paradigms' ? $resourceStore : $taskRepository;
                foreach (scanResourceInventory($repo) as $artifact) {
                    $modTime = date('Y-m-d H:i', filemtime("$repo$artifact"));
                    echo "<li>
                            <a href='$repo$artifact' class='file-card'>
                                <span class='filename'>$artifact</span>
                                <time datetime='$modTime'>Last modified: $modTime</time>
                            </a>
                          </li>";
                }
                ?>
                </ul>
            </section>
        <?php endif; ?>

        <?php if ($searchTerm): ?>
            <section class="search-results">
                <h2>Revelations for "<?= htmlspecialchars($searchTerm) ?>"</h2>
                <?php 
                $discoveries = locateResources($searchTerm, [
                    'paradigms' => $resourceStore,
                    'challenges' => $taskRepository
                ]);
                
                if (array_filter($discoveries)) {
                    foreach ($discoveries as $repo => $files) {
                        if (!empty($files)) {
                            echo "<div class='result-group'>
                                    <h3>" . ucfirst($repo) . "</h3>
                                    <ul>";
                            foreach ($files as $file) {
                                $highlighted = preg_replace(
                                    "/$searchTerm/i", 
                                    "<mark>$0</mark>", 
                                    $file
                                );
                                echo "<li><a href='$repo/$file'>$highlighted</a></li>";
                            }
                            echo "  </ul>
                                  </div>";
                        }
                    }
                } else {
                    echo '<p class="no-results">No arcane knowledge found matching your query</p>';
                }
                ?>
            </section>
        <?php endif; ?>
    </main>
</body>
</html>