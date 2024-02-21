<?php
//addTask($taskName, $priority) - метод, який додає завдання з назвою $taskName та пріоритетом $priority до списку завдань.
//deleteTask($taskId) - метод, який видаляє завдання зі списку за ідентифікатором $taskId.
//getTasks() - метод, який повертає всі завдання зі списку відсортовані за пріоритетом в порядку спадання. только возвращаем не выводим ретурн
//completeTask($taskId) - метод, який відмічає завдання з ідентифікатором $taskId як виконане.

/**
 * Class for tasks list
 */
class Class2
{
    private string $pathToFile;

    private mixed $file;

    private array $fileContent = [];

    public function __construct(string $pathToFile)
    {
        $this->setPathToFile($pathToFile);
        $this->openFile();
    }

    public function __destruct()
    {
        $this->closeFile();
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
        $this->fileContent = file($this->pathToFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    }

    /**
     * Method get content from property
     * @return array
     */
    private function getFileContent(): array
    {
        return $this->fileContent;
    }

    /**
     * Method for opening a file for changes
     * @return void
     */
    private function openFile(): void
    {
        $this->file = fopen($this->pathToFile, 'a+');
    }

    /**
     * Method for writing changes to a file
     * @param $file
     * @param $string
     * @return void
     */
    private function writeFile($file, $string): void
    {
        fwrite($file, $string);
    }

    /**
     * Method for close file
     * @return void
     */
    private function closeFile(): void
    {
        fclose($this->file);
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
        $this->writeFile($this->file, $task);
        $this->setFileContent();
    }

    /**
     * Method for remove task from file
     * @param int|string $taskId
     * @return void
     */
    public function deleteTask(int|string $taskId): void
    {
        $this->setFileContent();
        file_put_contents($this->pathToFile, '');
        foreach ($this->getFileContent() as $line) {
            $taskString = explode("|", $line);
            if ($taskString[0] != $taskId) {
                $this->writeFile($this->file, $line . "\n");
            }
        }
    }

    /**
     * Method for change status of task to Done
     * @param $taskId
     * @return void
     */
    public function completeTask($taskId): void
    {
        $this->setFileContent();
        file_put_contents($this->pathToFile, '');
        foreach ($this->getFileContent() as $line) {
            $taskString = explode("|", $line);
            if ($taskString[0] === $taskId) {
                $taskString[3] = Status::Done->value;
            }
            $this->writeFile($this->file, implode("|", $taskString) . "\n");
        }
    }

    /**
     * Method returns an array of tasks from the file in sorted order
     * @return array
     */
    public function getTasks(): array
    {
        $this->setFileContent();
        $fileContent = $this->getFileContent();
        $valuesToSort = [];
        foreach ($this->getFileContent() as $line) {
            $taskString = explode("|", $line);
            $valuesToSort[] = $taskString[2] ?? 0;
        }
        array_multisort($valuesToSort, $fileContent);
        return $fileContent;
    }
}