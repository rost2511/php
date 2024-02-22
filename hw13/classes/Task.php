<?php
//addTask($taskName, $priority) - метод, який додає завдання з назвою $taskName та пріоритетом $priority до списку завдань.
//deleteTask($taskId) - метод, який видаляє завдання зі списку за ідентифікатором $taskId.
//getTasks() - метод, який повертає всі завдання зі списку відсортовані за пріоритетом в порядку спадання. только возвращаем не выводим ретурн
//completeTask($taskId) - метод, який відмічає завдання з ідентифікатором $taskId як виконане.

/**
 * Class for tasks list
 */
class Task
{
    private string $pathToFile;

    private array $fileContent = [];

    public function __construct(string $pathToFile)
    {
        $this->setPathToFile($pathToFile);
        $this->setFileContent();
    }

    /**
     * method set the path to the file
     * @param string $pathToFile
     * @return void
     */
    private function setPathToFile(string $pathToFile): void
    {
        $this->pathToFile = $pathToFile;
    }

    /**
     * Method save file content to property
     * @return void
     */
    private function setFileContent(): void
    {
        if (file_exists($this->pathToFile)) {
            $this->fileContent = file($this->pathToFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        } else {
            file_put_contents($this->pathToFile, '');
        }
    }

    /**
     * Method for writing changes to a file
     * @return void
     */
    private function writeFile(): void
    {
        $content = implode(PHP_EOL, $this->fileContent);
        file_put_contents($this->pathToFile, $content);
    }

    /**
     * Method for add new task to file
     * @param string $taskName
     * @param int $priority
     * @return void
     */
    public function addTask(string $taskName, int $priority): void
    {
        $task = uniqid() . "|$taskName|$priority|" . Status::NotDone->value . "\n";
        $this->fileContent[] = $task;
        $this->writeFile();
    }

    /**
     * Method for remove task from file
     * @param int|string $taskId
     * @return void
     */
    public function deleteTask(int|string $taskId): void
    {
        foreach ($this->fileContent as $key => $value) {
            $taskString = explode("|", $value);
            if ($taskString[0] === $taskId) {
                unset($this->fileContent[$key]);
            }
            $this->writeFile();
        }
    }

    /**
     * Method for change status of task to Done
     * @param $taskId
     * @return void
     */
    public function completeTask($taskId): void
    {
        foreach ($this->fileContent as $key => $value) {
            $taskString = explode("|", $value);
            if ($taskString[0] === $taskId) {
                $taskString[3] = Status::Done->value;
                $this->fileContent[$key] = implode("|", $taskString);
            }
        }
        $this->writeFile();
    }

    /**
     * Method returns an array of tasks from the file in sorted order
     * @return array
     */
    public function getTasks(): array
    {
        $fileContent = $this->fileContent;
        $valuesToSort = [];
        foreach ($fileContent as $line) {
            $taskString = explode("|", $line);
            $valuesToSort[] = $taskString[2] ?? 0;
        }
        array_multisort($valuesToSort, $fileContent);
        return $fileContent;
    }
}